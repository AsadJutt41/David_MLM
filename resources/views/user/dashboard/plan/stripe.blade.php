@extends('layouts.user-dashboard') 

@section('content')
<!--app-content open-->
<div class="app-content main-content">
    <div class="side-app">
        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">Pay With Stripe</h4>
            </div>
        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <!--div-->
                <div class="card">
                    <div class="card-body">
                        <div class="panel-body">
                            @if (Session::has('success'))
                            <div class="alert alert-light-success" role="alert">
                                <button type="button" class="btn-close text-success mr-negative-16" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Well done!</strong>{{ Session::get('success') }}</a>
                            </div>
                            @endif

                            <form role="form" action="{{ route('dashboard.stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                @csrf

                                <div class="form-row row">
                                    <div class="col-xs-12 form-group required">
                                        <label class="control-label">Name on Card</label>
                                        <input class="form-control" size="4" type="text" required />
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-xs-12 form-group card required">
                                        <label class="control-label">Card Number</label>
                                        <input autocomplete="off" class="form-control card-number" size="20" max="16" type="text" required />
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-xs-12 col-md-4 form-group cvc required">
                                        <label class="control-label">CVC</label> 
                                        <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-4 form-group expiration required">
                                        <label class="control-label">Expiration Month</label> 
                                        <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text" required/>
                                    </div>
                                    <div class="col-xs-12 col-md-4 form-group expiration required">
                                        <label class="control-label">Expiration Year</label> 
                                        <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text" required/>
                                    </div>
                                </div>

                                <div class="form-row row">
                                    <div class="col-md-12 error form-group hide">
                                        <div class="alert-danger alert">Please correct the errors and try again.</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ({{ $amount }} {{ $currency }})</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/div-->
            </div>
        </div>
        <!-- /Row -->
    </div>
</div>
<!-- CONTAINER END -->
@endsection 
@push('scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function () {
        var $form = $(".require-validation");
        $("form.require-validation").bind("submit", function (e) {
            var $form = $(".require-validation"),
                inputSelector = ["input[type=email]", "input[type=password]", "input[type=text]", "input[type=file]", "textarea"].join(", "),
                $inputs = $form.find(".required").find(inputSelector),
                $errorMessage = $form.find("div.error"),
                valid = true;
            $errorMessage.addClass("hide");

            $(".has-error").removeClass("has-error");
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === "") {
                    $input.parent().addClass("has-error");
                    $errorMessage.removeClass("hide");
                    e.preventDefault();
                }
            });

            if (!$form.data("cc-on-file")) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data("stripe-publishable-key"));
                Stripe.createToken(
                    {
                        number: $(".card-number").val(),
                        cvc: $(".card-cvc").val(),
                        exp_month: $(".card-expiry-month").val(),
                        exp_year: $(".card-expiry-year").val(),
                    },
                    stripeResponseHandler
                );
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $(".error").removeClass("hide").find(".alert").text(response.error.message);
            } else {
                // token contains id, last4, and card type
                var token = response["id"];
                // insert the token into the form so it gets submitted to the server
                $form.find("input[type=text]").empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>

@endpush

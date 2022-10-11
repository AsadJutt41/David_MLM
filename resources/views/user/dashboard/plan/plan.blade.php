@extends('layouts.user-dashboard')

@section('content')
 <!--app-content open-->
 <div class="app-content main-content">
    <div class="side-app">

        
        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">Data Tables</h4>
            </div>
        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="row">
            <div class="col-12">
                <!--div-->
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('dashboard.plan.submit') }}" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label class="label-control" for="">Select Plan</label>
                                <select name="plan" class="form-control" required>
                                    <option disabled selected>Select one of them</option>
                                    @foreach ($plans as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} &nbsp; {{ $item->amount }} {{ $item->currency }}</option>
                                        <input type="hidden" name="amount" value="{{ $item->amount }}">
                                        <input type="hidden" name="currency" value="{{ $item->currency }}">
                                    @endforeach
                                </select>
                                @if($errors->has('name'))
                                    <div class="error">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
    
                            <div class="col-md-12 mt-4">
                                <label class="label-control" for="">Select Payment Method</label>
                                <select name="method" class="form-control" required>
                                    <option disabled selected>Select one of them</option>
                                    <option value="paypal">PayPal</option>
                                    <option value="stripe">Stripe</option>
                                </select>
                                @if($errors->has('method'))
                                    <div class="error">{{ $errors->first('method') }}</div>
                                @endif
                            </div>
    
                            <button class="btn btn-primary mt-3" style="margin-left: 12px; padding-left: 4rem; padding-right: 4rem;">Pay Now</button>
                        </form>
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
<x-guest-layout>
    @extends('layouts.auth')

    @section('content')
        <!--sign up section start-->
        <section class="section section-lg py-0 min-vh-100 bg-soft">
            <div class="container-fluid p-0">
                <div class="row align-items-center min-vh-100 justify-content-center no-gutters">
                    <div class="col-12 col-md-7 col-lg-8 col-xl-8 d-none d-md-none d-xl-block" style="background-image: url('assets/img/slider-img-5.jpg');">
                        <!-- Image -->
                        <div class="d-flex align-items-center min-vh-100 bg-gradient-primary text-white">
                            <div class="position-relative w-75 p-8">
                                <h1 class="display-2">Thanks for signing up!</h1>
                                <p class="lead"> Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 col-xl-4">
                        <div class="login-signup-wrap bg-soft p-5 p-md-4 px-lg-6">
                            <!-- Heading -->
                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                    
                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                    
                                    <div>
                                        <button class="btn btn-block btn-secondary mt-4 mb-3">Resend Verification Email</button>
                                    </div>
                                </form>
                    
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                    
                                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div>
        </section>
        <!--sign up section end-->
        
    @endsection
</x-guest-layout>
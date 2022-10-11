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
                                <h1 class="display-2">Forgot your password?</h1>
                                <p class="lead"> No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 col-xl-4">
                        <div class="login-signup-wrap bg-soft p-5 p-md-4 px-lg-6">
                            <!-- Heading -->
                            <h3 class="text-center">Forgot Your Password?</h3>

                            <!-- Subheading -->
                            <p class="text-muted text-center mb-5">
                                Enter your email to get a link where you can reset your password.
                            </p>
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="block">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <button class="btn btn-block btn-secondary mt-4 mb-3">Email Password Reset Link</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div>
        </section>
        <!--sign up section end-->
        
    @endsection
</x-guest-layout>
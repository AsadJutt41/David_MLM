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
                                <h1 class="display-2">Reset Your Password !</h1>
                                <p class="lead">Keep your face always toward the sunshine - and shadows will fall behind you. Continually pursue fully researched niches whereas timely platforms.</p>
                                <p>If want to login.<a href="{{ route('register') }}" style="color: rgb(109, 109, 228);">Click here to Register</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 col-xl-4">
                        <div class="login-signup-wrap bg-soft p-5 p-md-4 px-lg-6">
                            <!-- Heading -->
                            <h3 class="text-center">Reset Password</h3>

                            <!-- Subheading -->
                            <p class="text-muted text-center mb-5">
                                Reset your password to log in and continue your account.
                            </p>
                            <x-jet-validation-errors class="mb-4" />

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="block">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                <button class="btn btn-block btn-secondary mt-4 mb-3">Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div>
        </section>
        <!--sign up section end-->
        
    @endsection
</x-guest-layout>
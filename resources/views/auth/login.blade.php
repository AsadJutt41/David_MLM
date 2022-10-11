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
                                <h1 class="display-2">Welcome Back !</h1>
                                <p class="lead">Keep your face always toward the sunshine - and shadows will fall behind you. Continually pursue fully researched niches whereas timely platforms.</p>
                                <p>Didn't have an account yet.<a href="{{ route('register') }}" style="color: rgb(109, 109, 228);">Click here to Register</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4 col-xl-4">
                        <div class="login-signup-wrap bg-soft p-5 p-md-4 px-lg-6">
                            <!-- Heading -->
                            <h3 class="text-center">Sign In</h3>

                            <!-- Subheading -->
                            <p class="text-muted text-center mb-5">
                                Sign in to your account to continue.
                            </p>
                            <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold">Email Address</label>
                                    <div class="input-group input-group-merge">
                                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus >
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="font-weight-bold">Password</label>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ route('password.request') }}" class="form-text small text-muted">
                                                Forgot password?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                                    </div>
                                </div>

                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <!-- Submit -->
                                <button class="btn btn-block btn-secondary mt-4 mb-3">Sign in</button>

                            </form>
                        </div>
                    </div>
                </div> <!-- / .row -->
            </div>
        </section>
        <!--sign up section end-->
        
    @endsection
</x-guest-layout>
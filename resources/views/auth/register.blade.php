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
                            <h1 class="display-2">Create Your Account</h1>
                            <p class="lead">Keep your face always toward the sunshine - and shadows will fall behind you. Continually pursue fully researched niches whereas timely platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 col-xl-4">
                    <div class="login-signup-wrap bg-soft p-5 p-md-4 px-lg-6">
                        <!-- Heading -->
                        <h3 class="text-center">Sign Up</h3>

                        <!-- Subheading -->
                        <p class="text-muted text-center mb-5">
                            Free access to our dashboard.
                        </p>
                        <x-jet-validation-errors class="mb-4" />
                        <!-- Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">Referal Name <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    @php
                                        $users = App\Models\User::all();
                                    @endphp
                                    <div class="input-group input-group-merge">
                                        <select class="js-example-basic-single form-control" name="refer_by" required>
                                            <option disabled selected>Select Refreal User</option>
                                            @foreach ($users as $item)
                                                <option value="{{ $item->id }}">{{ $item->user_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
    
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">User Name <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="user_name" value="{{ old('user_name') }}" class="form-control" placeholder="Your unique user name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">First Name <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="Your First Name" required>
                                    </div>
                                </div>
    
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">Last Name <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Your Last Name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">Email Address <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="name@address.com" required>
                                    </div>
                                </div>
    
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">Phone Number <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="form-control" placeholder="123456789" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">City <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="city" value="{{ old('city') }}" class="form-control" placeholder="Your City" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">Zip / Postal Code <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="postal_code" value="{{ old('postal_code') }}" class="form-control" placeholder="Your Postal Code" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">State <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="state" value="{{ old('state') }}" class="form-control" placeholder="Your State" required>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">Country <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="text" name="country" value="{{ old('country') }}" class="form-control" placeholder="Your Country" required>
                                    </div>
                                </div>
                            </div>

                            

                            <!-- Password -->
                           <div class="row">
                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">Password <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password" class="form-control" placeholder="Enter your password"  autocomplete="new-password required">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <!-- Label -->
                                    <label class="font-weight-bold">Confirm Password <span style="color: red;">*</span></label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password"  autocomplete="new-password" required>
                                    </div>
                                </div>
                           </div>

                            <div class="my-4">
                                <div class="form-check square-check">
                                    <input class="form-check-input" name="terms" type="checkbox" value="" id="check-terms">
                                    <label class="form-check-label" for="check-terms">
                                        I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>

                            <div class="my-4">
                                <p>Already have an account. Please <a href="{{ route('login') }}">Login</a></p>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-block btn-secondary border-radius mt-4 mb-3">
                                Sign up
                            </button>
                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div>
    </section>
    <!--sign up section end-->
@endsection
</x-guest-layout>


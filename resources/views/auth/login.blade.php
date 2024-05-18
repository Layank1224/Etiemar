{{-- Log in--}}
@extends('layouts.auth')

@section('content')
    <div class="form-container sign-up-container">

        <form action="">
            <h1>Log in</h1>
            <div class="social-container">

            </div>

            <span>Enter the code below</span>

            <div class="container">
                <header>
                    <i class="bx bxs-check-shield"></i>
                </header>
                <!-- Logo -->

                <h4>Enter OTP Code</h4>
                <form action="#">
                    <div class="input-field">
                        <input type="number" maxlength="1" onkeyup="moveToNext(this, 'input2')" />
                        <input type="number" id="input2" maxlength="1" onkeyup="moveToNext(this, 'input3')" />
                        <input type="number" id="input3" maxlength="1" onkeyup="moveToNext(this, 'input4')" />
                        <input type="number" id="input4" maxlength="1" />
                    </div>
                    <button>Verify OTP</button>
                </form>
            </div>

            <button>SignIn</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Sign In</h1>
            <div class="social-container">

            </div>


            <input class=" @error('email') is-invalid @enderror" id="email" type="email" name="email"
                placeholder="Enter your email" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror



            <input placeholder="Enter your password" id="password" type="password"
                class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="row mb-3">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            <br>
            <button type="submit" class="ghost" id="signIn">Next</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <!-- Logo -->
                <img src="assets\images\logo.png" alt="Logo"
                    style="width: 180px; height: 120px; position: relative; top: -4%;
            left: 2.5%;">
                <!-- Welcome Back -->
                <h1 style="color: #05001a">Welcome Back!</h1>
                <p style="color: #05001a">We've sent a verification code to your registered email address. <br><b
                        style="font-size: 70%">Please check your inbox</b></p>

                <button style="color: #05001a" class="ghosst" id="signUp">
                    << Back</button>
            </div>
            <div class="overlay-panel overlay-right">
                <!-- Logo -->
                <img src="assets\images\logo.png" alt="Logo"
                    style="width: 180px; height: 120px;position: relative; top: -4%;
            right: 2.5%;">
                <!-- Welcome -->
                <h1 style="color: #05001a">Welcome</h1>
                <p style="color: #05001a">Use your company ID and Password to Log in to the system</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('title', 'Login')
@section('content')

<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Hero Area End -->

<section style="margin: 50px 0 50px 0;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row mb-3 justify-content-center">
                <div class="col-md-7">
                    <h3 class="text-center">Sign into your account</h3>
                </div>
             </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-7">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-7">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-7">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-7">
                                <button type="submit" class="form-control genric-btn success">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-7">
                                <p>Don't have an account? <a style="color:#506172; text-decoration: underline;" href="/register">Register here</a></p>    
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
</section>
@endsection

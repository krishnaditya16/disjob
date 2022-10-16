@extends('layouts.main')

@section('title', 'Register')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Register</h2>
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
                    <h3 class="text-center">Create a new account</h3>
                </div>
             </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                            <div class="col-md-7">
                                <input id="name" type="text" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-7">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="row mb-3 justify-content-center">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-7">
                                <select type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                    <option selected disabled> Select Role </option>
                                    <option value="employer">Employer</option>
                                    <option value="user">Candidate</option>
                                </select> -->
                                <input id="role" type="hidden" placeholder="Role" class="form-control @error('role') is-invalid @enderror" name="role" value="user" required autocomplete="role">

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div>
                        </div> -->

                        <div class="row mb-3 justify-content-center">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-7">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-7">
                                <button type="submit" class="form-control genric-btn success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-7">
                                <p>Already have an account? <a style="color:#506172; text-decoration: underline;" href="/register">Sign in</a></p>    
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
</section>
@endsection

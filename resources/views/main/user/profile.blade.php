@extends('layouts.main')

@section('title', 'Edit Profile')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Edit Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Hero Area End -->
<section>

        <!-- Job List Area Start -->
        <div class="job-listing-area pt-80 pb-60">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        
                        <!-- Job Category Listing start -->
                        <div class="job-category-listing mb-50">
                            <!-- single one -->
                            <div class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>MENU</h4>
                               </div>
                               <div class="footer-area">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">                 
                                        <ul>
                                            <li><a href="/user"> <i class="fas fa-tachometer-alt"></i><span style="margin-left: 10px;">Dashboard</span></a></li>
                                            <li><a href="/profile"> <i class="fas fa-pencil-alt"></i><span style="margin-left: 10px;">Edit Profile</span></a></li>
                                            <li><a href="/resume"> <i class="fas fa-file-alt"></i><span style="margin-left: 10px;"> Manage Resume</span></a></li>
                                            <li><a href="/my-application"> <i class="fas fa-desktop"></i><span style="margin-left: 10px;">My Job Application</span></a></li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-sign-out-alt"></i><span style="margin-left: 10px;">Logout</span>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                               </div>
                            </div>                           
                        </div>
                        <!-- Job Category Listing End -->
                    </div>

                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">

                                @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                </div>
                                @endif

                                    <form method="POST" action="{{ route('profile.update') }}">
                                        @method('patch')    
                                        @csrf
                                        <h4>Account Information</h4>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="col-form-label text-md-right">Email</label>
                                                <input readonly id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email" autofocus>
                                                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="col-form-label text-md-right">Password</label>
                                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <hr>

                                        <h4>Personal Information</h4>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="col-form-label text-md-right">Full Name</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="col-form-label text-md-right">Date of Birth</label>
                                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date', $user->birth_date) }}" required autocomplete="date">

                                                @error('date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="col-form-label text-md-right">Gender</label><br>
                                                <select class="@error('gender') is-invalid @enderror" name="gender" required autocomplete="role" autofocus>
                                                    <option selected disabled>Select Gender</option>
                                                    <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                                    <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label class="col-form-label text-md-right">Phone Number</label>
                                                <input id="phone" type="text" placeholder="Phone Number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $user->phone) }}" required autocomplete="phone" autofocus>
                                                
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6">
                                                <label class="col-form-label text-md-right">Nationality</label>
                                                <input id="nationality" placeholder="Nationality" type="text" class="form-control @error('password') is-invalid @enderror" name="nationality" value="{{ old('nationality', $user->nationality) }}" required autocomplete="nationality" autofocus>

                                                @error('nationality')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-12">
                                                <label class="col-form-label text-md-right">Street Address</label>
                                                <input id="address" type="text" placeholder="Street Address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $user->address) }}" required autocomplete="address" autofocus>
                                                
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <button type="submit" class="form-control genric-btn success">
                                                    Update Your Profile
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->

</section>
@endsection

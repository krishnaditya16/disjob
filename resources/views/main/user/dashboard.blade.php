@extends('layouts.main')

@section('title', 'User Dashboard')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>User Dashboard</h2>
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
                                <!-- single-job-content -->
                                <div class="single-job-items">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="#"><img src="{{asset('assets/img/profile_picture.png') }}" style="height:85px" alt=""></a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{ Auth::user()->name }}</h4>
                                            </a>
                                            <ul>
                                                <li><i class="fas fa-envelope"></i>{{ Auth::user()->email }}</li>
                                                <li><i class="fas fa-map-marker-alt"></i>{{ Auth::user()->address }}</li>
                                            </ul>
                                            <ul>
                                                <li><i class="fas fa-phone"></i>{{ Auth::user()->phone }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="/profile">Edit Profile</a>
                                    </div>
                                </div>

                                <div class="single-job-items">
                                    <div class="job-items">
                                        <div class="job-post-details">
                                            <div class="post-details1 mb-10">
                                                <!-- Small Section Tittle -->
                                                <div class="small-section-tittle">
                                                    <h4>Message from our team!</h4>
                                                </div>
                                                <p>Hey job seeker! you can start your career adventure by managing your profile using the menu on 
                                                    the left side of your screen or you can just start browsing for jobs vacancy right away!</p>
                                            </div>
                                        </div>
                                    </div>
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

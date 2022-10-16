@extends('layouts.main')

@section('title', 'Employer Dashboard')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Employer Dashboard</h2>
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
                                            <li><a href="/employer"> <i class="fas fa-tachometer-alt"></i><span style="margin-left: 10px;">Dashboard</span></a></li>
                                            <li><a href="/add-jobs"> <i class="fas fa-plus"></i><span style="margin-left: 10px;">Add Jobs</span></a></li>
                                            <li><a href="/jobs-list"> <i class="fa-fw fas fa-briefcase"></i><span style="margin-left: 10px;">Jobs List</span></a></li>
                                            <li><a href="/applicants"> <i class="fas fa-desktop"></i><span style="margin-left: 10px;">Job Applications</span></a></li>
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
                                            <img src="{{ asset('image/'.$perusahaan->logo_perusahaan) }}" alt="" style="height: 85px;">
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4>{{ Auth::user()->name }}</h4>
                                            </a>
                                            <ul>
                                                <li><i class="fas fa-envelope"></i>{{ Auth::user()->email }}</li>
                                                <li><i class="fas fa-globe"></i>{{ $perusahaan->alamat_website }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-job-items">
                                    <div class="job-items">
                                        <div class="job-post-details">
                                            <div class="post-details1 mb-10">
                                                <!-- Small Section Tittle -->
                                                <div class="small-section-tittle">
                                                    <h4>Company Description</h4>
                                                </div>
                                                <p>{{ $perusahaan->deskripsi_perusahaan }}</p>
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

@extends('layouts.main')

@section('title', 'Find the most exciting startup jobs')
@section('content')

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center"
            data-background="{{asset('assets/homepage/img/hero/h1_hero.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption">
                            <h1>Dream Job is Waiting for you!</h1>
                        </div>
                    </div>
                </div>
                <!-- Search Box -->
                <div class="row gx-5">
                    <div class="col-sm-6 col-md-8">
                        <!-- form -->
                        <form action="/joblisting" name="search" class="search-box" id="search_form" method="get">
                            <div class="input-form">
                                <input type="text" name="search" placeholder="Job Title or keyword">
                            </div>

                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="location" id="location">
                                        <option selected disabled>Select Location</option>
                                        @foreach ($lokasi as $lks)
                                        <option value="{{$lks}}">{{$lks}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <a href="javascript:{}"
                                    onclick="document.getElementById('search_form').submit(); return false;">Find
                                    job</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- Our Services Start -->
<div class="our-services section-pad-t30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>FEATURED JOBS</span>
                    <h2>Browse Top Categories </h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-contnet-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-report"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="/joblisting?search=&category=Accounting">Accounting</a></h5>
                        <span>({{DB::table('jobs')->where('kategori_job', '=', 'Accounting')->count();}})</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-cms"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="/joblisting?search=&category=Web+Development">Web Development</a></h5>
                        <span>({{DB::table('jobs')->where('kategori_job', '=', 'Web Development')->count();}})</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-report"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="/joblisting?search=&category=Sales+%26+Marketing">Sales & Marketing</a></h5>
                        <span>({{DB::table('jobs')->where('kategori_job', '=', 'Sales & Marketing')->count();}})</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-app"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="/joblisting?search=&category=Mobile+Application">Mobile Application</a></h5>
                        <span>({{DB::table('jobs')->where('kategori_job', '=', 'Mobile Application')->count();}})</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-helmet"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="/joblisting?search=&category=Engineering">Engineering</a></h5>
                        <span>({{DB::table('jobs')->where('kategori_job', '=', 'Engineering')->count();}})</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-search"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="/joblisting?search=&category=Human+Resources">Human Resources</a></h5>
                        <span>({{DB::table('jobs')->where('kategori_job', '=', 'Human Resources')->count();}})</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-content"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="/joblisting?search=&category=Administration">Administration</a></h5>
                        <span>({{DB::table('jobs')->where('kategori_job', '=', 'Administration')->count();}})</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-cms"></span>
                    </div>
                    <div class="services-cap">
                        <h5><a href="/joblisting?search=&category=Graphic+Design">Graphic Design</a></h5>
                        <span>({{DB::table('jobs')->where('kategori_job', '=', 'Graphic Design')->count();}})</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- More Btn -->
        <!-- Section Button -->
        <div class="row">
            <div class="col-lg-12">
                <div class="browse-btn2 text-center mt-50">
                    <a href="/joblisting" class="border-btn2">Browse All Sectors</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Services End -->
<!-- Online CV Area Start -->
<div class="online-cv cv-bg section-overly pt-90 pb-120"
    data-background="{{asset('assets/homepage/img/gallery/cv_bg.jpg') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="cv-caption text-center">
                    <p class="pera1">Submit Resume</p>
                    <p class="pera2">Submit Your Resume and Get Reviewed by Professional</p>
                    <a href="/resume" class="border-btn2 border-btn4">Upload your cv</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Online CV Area End-->
<!-- Featured_job_start -->
<section class="featured-job-area feature-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>Recent Job</span>
                    <h2>Featured Jobs</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <!-- single-job-content -->
                @foreach($job as $data)
                <div class="single-job-items mb-30">
                    <div class="job-items">
                        <div class="company-img">
                            <img src="{{ asset('image/'.$data->logo_perusahaan) }}" alt="" style="height: 85px;">
                        </div>
                        <div class="job-tittle job-tittle2">
                            <a href="/joblisting/{{ $data->id }}">
                                <h4>{{ $data->title }}</h4>
                            </a>
                            <ul>
                                <li>{{ $data->perusahaan_job }}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $data->lokasi_job }}</li>
                                <li>{{ $data->gaji }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="items-link items-link2 f-right">
                        <a href="/joblisting/{{ $data->id }}">{{ $data->tipe_job }}</a>
                        <span class="float-right">{{$data->created_at->diffForHumans()}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Featured_job_end -->
<!-- How  Apply Process Start-->
<div class="apply-process-area apply-bg pt-150 pb-150"
    data-background="{{asset('assets/homepage/img/gallery/how-applybg.png') }}">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle white-text text-center">
                    <span>Apply process</span>
                    <h2> How it works</h2>
                </div>
            </div>
        </div>
        <!-- Apply Process Caption -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-search"></span>
                    </div>
                    <div class="process-cap">
                        <h5>1. Search a job</h5>
                        <p> More than 1,000 job offers you can search.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-curriculum-vitae"></span>
                    </div>
                    <div class="process-cap">
                        <h5>2. Apply for job</h5>
                        <p>Find your dream job that suits you the most.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-process text-center mb-30">
                    <div class="process-ion">
                        <span class="flaticon-tour"></span>
                    </div>
                    <div class="process-cap">
                        <h5>3. Get your job</h5>
                        <p>Take a chance and reach your dream.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- How  Apply Process End-->
<!-- Testimonial Start -->
<div class="testimonial-area testimonial-padding" id="testimony">
    <div class="container">
        <!-- Testimonial contents -->
        <div class="row d-flex justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10">
                <div class="h1-testimonial-active dot-style">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder  ">
                                <div class="founder-img mb-30">
                                    <img src="{{asset('assets/homepage/img/testmonial/pic1.png') }}" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“Love it, I've never felt like finding a job this easy.”</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder  ">
                                <div class="founder-img mb-30">
                                    <img src="{{asset('assets/homepage/img/testmonial/pic2.png') }}" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“Highly recommended, very detailed information and a variety of job choices from
                                    large companies.”</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder  ">
                                <div class="founder-img mb-30">
                                    <img src="{{asset('assets/homepage/img/testmonial/pic4.png') }}" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I just started using disjob and it has been great. I feel helped. I would definitely
                                    worth to try.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial End -->
<!-- Support Company Start-->
<div class="support-company-area support-padding fix">
    <div class="container pb-200">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="right-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2">
                        <span>What we are doing</span>
                        <h2>Many talented people have found their dream job</h2>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">We help you in finding the job of your dreams, where we work with 100+
                            companies that will give you interesting jobs.</p>
                        <p>With <strong>DisJob</strong>, we will assist you in choosing your next career according to
                            what you dream and want so that you are committed to reducing the current unemployment rate.
                            So from that, come with us in determining your future choice</p>
                        <a href="/about" class="btn post-btn">About Us</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="support-location-img">
                    <img src="{{asset('assets/homepage/img/service/support-img.jpg') }}" alt="">
                    <div class="support-img-cap text-center">
                        <p>Since</p>
                        <span>2021</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Support Company End-->

<!-- Blog Area Start -->
<!-- <div class="home-blog-area blog-h-padding">
            <div class="container"> -->

            <!-- Section Tittle -->
            <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Our latest blog</span>
                            <h2>Our recent news</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{asset('assets/homepage/img/blog/home-blog1.jpg') }}" alt=""> -->

                            <!-- Blog date -->
                            <!-- <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>|   Properties</p>
                                    <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href="#" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{asset('assets/homepage/img/blog/home-blog2.jpg') }}" alt=""> -->

                                <!-- Blog date -->
                                <!-- <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>|   Properties</p>
                                    <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                    <a href="#" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Blog Area End -->  

@endsection
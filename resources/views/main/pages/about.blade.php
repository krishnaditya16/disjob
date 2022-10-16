@extends('layouts.main')

@section('title', 'About Us')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>About us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Hero Area End -->
<!-- Support Company Start-->
<section class="contact-section">
    <div class="container">
        <div class="support-company-area support-padding fix">
            <div class="container pb-200">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>About Us</span>
                                <h2>We helped many talented people found their dream job</h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">We help you in finding the job of your dreams, where we work with 100+ companies that will give you interesting jobs.</p>
                                <p>With <strong>DisJob</strong>, we will assist you in choosing your next career according to what you dream and want so that you are committed to reducing the current unemployment rate. So from that, come with us in determining your future choice</p>

                                <p>If you're interested in posting your job vacancy on your company, please contact our adminstrator through our contact page or simply message us to our email at disjob@info.com.</p>
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
    </div>
</section>
<!-- Support Company End-->


@endsection

@extends('layouts.main')

@section('title', 'Contact')
@section('content')

<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('send.email') }}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                @if(session()->has('message'))
                                    <div class="alert alert-success alert-block">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                </div>                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                    @error('subject')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="content" id="content" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                    @error('content')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <!-- <button type="submit" class="button button-contactForm boxed-btn">Send</button> -->
                                <a href="javascript:{}" class="button button-contactForm boxed-btn" onclick="document.getElementById('contactForm').submit(); return false;">Send</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Denpasar, Bali.</h3>
                                <p>Jl. Tukad Batanghari No.13, Denpasar</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+62 821 2345 6789</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>disjob@info.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@extends('layouts.main')

<!-- @section('title', '{{ $title }}') -->
<title>Disjob | {{ $job->title }}</title>
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{ $job->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <img src="{{ asset('image/'.$perusahaan->logo_perusahaan) }}" style="height:85px" alt="">
                                </div>
                                <div class="job-tittle">
                                    <h4>{{ $job->title }}</h4>
                                    <ul>
                                        <li>{{ $perusahaan->nama_perusahaan }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $job->lokasi_job }}</li>
                                        <li>{{ $job->gaji }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p>{{ $job->deskripsi}}</p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>
                                {!! $job->kemampuan !!}
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Education + Experience</h4>
                                </div>
                                {!! $job->pengalaman !!}
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span>{{ date('j F Y', strtotime($job->created_at)); }}</span></li>
                              <li>Location : <span>{{ $job->lokasi_job }}</span></li>
                              <li>Vacancy : <span>{{ $job->jumlah_lowongan }}</span></li>
                              <li>Job nature : <span>{{ $job->tipe_job }}</span></li>
                              <li>Salary :  <span>{{ $job->gaji }}</span></li>
                              <li>Deadline : <span>{{ date('j F Y', strtotime($job->deadline)); }}</span></li>
                          </ul>
                         <div class="apply-btn2">
                            <a href="{{route('apply.create', $job->id)}}" class="btn">Apply Now</a>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>{{ $perusahaan->nama_perusahaan }}</span>
                              <p>{{ $perusahaan->deskripsi_perusahaan }}</p>
                            <ul>
                                <li>Name : <span>{{ $perusahaan->nama_perusahaan }} </span></li>
                                <li>Web : <span> {{ $perusahaan->alamat_website }}</span></li>
                                <li>Email : <span>{{ $perusahaan->email }}</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->
@endsection

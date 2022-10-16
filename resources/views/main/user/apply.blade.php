@extends('layouts.main')

<!-- @section('title', '{{ $title }}') -->
<title>Disjob | Apply as {{ $job->title }}</title>
@section('content')
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 200px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Apply as {{ $job->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

        <!-- job post company Start -->
        <div class="job-post-company pt-20 pb-20">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-10">
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
                                <div class="col-md-12">
                                <!-- form here <form>-->
                                <form method="POST" action="{{route('apply.store', ['id' => $job->id])}}">
                                    @csrf
                                    <h4>Apply as {{ $job->title }} in {{ $job->perusahaan_job }}</h4>
                                    <div class="row mb-3">
                                        
                                        <div class="col-md-6">
                                            <label class="col-form-label text-md-right">Expected Salary</label>
                                            <input id="expected_salary" placeholder="Expected Salary" type="text" class="form-control @error('password') is-invalid @enderror" name="expected_salary" required>

                                            @error('expected_salary')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label class="col-form-label text-md-right">Select Your Resume</label><br>
                                            <select name="cv_applicant" class="@error('cv_applicant') is-invalid @enderror">
                                                <option selected disabled>Select Resume</option>
                                                @foreach ($resume as $rsm)
                                                    <option value="{{ $rsm->cv_file }}">{{ $rsm->cv_file }}</option>
                                                @endforeach
                                            </select>
                                            
                                            @error('cv_applicant')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="hidden" name="name_applicant" value="{{ Auth::user()->name }}"/>
                                    <input type="hidden" name="email_applicant" value="{{ Auth::user()->email }}"/>
                                    <input type="hidden" name="job_name" value="{{ $job->title }}"/>
                                    <input type="hidden" name="company_name" value="{{ $job->perusahaan_job }}"/>

                                    <div class="row mb-5">
                                        <div class="col-md-12">
                                            <button type="submit" class="form-control genric-btn success">
                                                Apply for job!
                                            </button>
                                        </div>
                                    </div> 
                                    
                                    <div class="post-details2  mb-50">
                                        <div class="small-section-tittle">
                                            <h4>Rules & Terms for Job Application</h4>
                                        </div>
                                        <ul>
                                            <li>Please make sure that you have uploaded your resume first so the list doesn't show up as an empty field.</li>
                                            <li>Make sure that every information that you will sent to the employer is real and can be held accountable.</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                </form>
                                <!-- form end here </form> -->
                                
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
                       </div>
                    </div>
                    <!-- job single End -->                
                </div>
                    
            </div>
        </div>
    </div>
    <!-- job post company End -->
@endsection

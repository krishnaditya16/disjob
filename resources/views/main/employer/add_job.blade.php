@extends('layouts.main')

@section('title', 'Add Jobs')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Add Jobs</h2>
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
                            <div class="row justify-content-center">
                                <div class="col-md-12">

                                @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                </div>
                                @endif
                        
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (count($job) >= 2)
                                <div class="post-details2  mb-50">
                                        <div class="small-section-tittle">
                                            <h4>Important Notice!</h4>
                                        </div>
                                        <ul>
                                            <li>You have already posted the maximum amount of job vacancy allowed (only 2 jobs) for our free tier</li>
                                            <li>Please contact our admin to upgrade your account to premium tier where you can post any number of jobs you want.</li>
                                        </ul>
                                    </div>
                                @else
                                <form action="{{ route('add-jobs.store') }}" method="post">
                                @csrf
                                <h4>Add Job Vacancy</h4>
                                    <div class="form-group">
                                    <label>Jobs Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>

                                    <div class="row mb-3">
                                        <input type="hidden" name="perusahaan_job" class="form-control" value="{{ Auth::user()->name }}" required>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Location</label><br>
                                                <select name="lokasi_job">
                                                    <option selected disabled>Select Location</option>
                                                    @foreach ($lokasi as $lks)
                                                        <option value="{{ $lks->lokasi_kerja }}">{{ $lks->lokasi_kerja }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Category</label><br>
                                                <select name="kategori_job">
                                                    <option selected disabled>Select Category</option>
                                                    @foreach ($kategori as $ktg)
                                                        <option value="{{ $ktg->nama_kategori }}">{{ $ktg->nama_kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Job Type</label><br>
                                                <select name="tipe_job">
                                                    <option selected disabled>Select Job Type</option>
                                                    @foreach ($tipe as $tip)
                                                        <option value="{{ $tip->tipe_kerja }}">{{ $tip->tipe_kerja }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Company Physical Address</label>
                                        <input type="text" name="alamat" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Job Description</label>
                                        <textarea class="form-control" style="height:100px" name="deskripsi" required></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label>Required Knowledge, Skills, and Abilities</label>
                                        <!-- <textarea class="form-control" style="height:100px" name="kemampuan" required></textarea> -->
                                        <textarea class="ckeditor form-control" name="kemampuan" required></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label>Education + Experience</label>
                                        <!-- <textarea class="form-control" style="height:100px" name="pengalaman" required></textarea> -->
                                        <textarea class="ckeditor form-control" name="pengalaman" required></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label>Total Vacancy</label>
                                        <input type="number" name="jumlah_lowongan" class="form-control" required>
                                    </div> 
                                    <div class="form-group">
                                    <label>Salary</label>
                                        <input type="text" name="gaji" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Application Deadline</label>
                                        <input type="date" name="deadline" class="form-control" required>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="form-control genric-btn success" title="Simpan Data">Add Job</button>
                                    </div>
                                </form>
                                @endif    
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->

</section>

    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection

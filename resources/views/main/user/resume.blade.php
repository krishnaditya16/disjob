@extends('layouts.main')

@section('title', 'Resume')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Resume</h2>
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
                                <!-- <a style="color:black" src="/uploaded_file/{{ Session::get('cv_file') }}"> -->
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

                                    <form method="POST" action="{{ route('resume.upload') }}" enctype="multipart/form-data">
                                        @csrf
                                        <h4>Upload Your Resume</h4>
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label class="col-form-label text-md-right">Curriculum Vitae <label style="color:red"> ( File Types : jpeg,png,jpg,zip,pdf | Max Size : 2 Mb )</label></label>
                                                <!-- <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
                                                <div class="custom-file">
                                                    <input type="file" name="cv_file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                
                                                @error('cv_file')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                <input type="hidden" name="user_email_cv" class="form-control @error('user_email_cv') is-invalid @enderror" name="user_email_cv" value="{{ Auth::user()->email }}" required>

                                                @error('user_email_cv')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <button type="submit" class="form-control genric-btn success">
                                                    Upload Now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                
                                <hr>

                                <h4>Your Resume</h4>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover text-nowrap data-table" id="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>Resume Files</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                </tbody>
                                            </table>
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

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: "{{ route('resume.index') }}",
            columns: [
                {data: 'cv_file', name: 'cv_file'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            columnDefs: [{
                "targets": 0,
                "data": "download_link",
                "render": function ( data, type, full, meta ) {
                return '<a class="genric-btn info small" href="/uploaded_resume/'+data+'"><i class="fas fa-download"></i> '+data+'</a>';
                }
            }],
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10', '25', '50', 'All' ]
            ],
        });
    });
</script>
@endsection

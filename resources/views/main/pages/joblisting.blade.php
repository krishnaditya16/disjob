@extends('layouts.main')

@section('title', 'Job Listing')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="{{asset('assets/homepage/img/hero/about.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Get Your Job</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <!-- Left content -->
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="small-section-tittle2 mb-45">
                            <div class="ion"> <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="12px">
                                    <path fill-rule="evenodd" fill="rgb(27, 207, 107)"
                                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z" />
                                </svg>
                            </div>
                            <h4>Filter Jobs</h4>
                        </div>
                    </div>
                </div>
                <!-- Job Category Listing start -->
                <div class="job-category-listing mb-50">
                    <form action="/joblisting" method="GET">
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                <h4>Search Job</h4>
                            </div>
                            <!-- Input job items start -->
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Insert keyword here" value="{{ request('search') }}">
                                </div>
                            </div>
                        </div>
                        <!-- single one -->
                        <div class="single-listing">
                            <div class="small-section-tittle2 pt-30">
                                <h4>Job Category</h4>
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="category">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($kategori as $ktg)
                                    <option value="{{$ktg}}">{{$ktg}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Select job items End-->
                        </div>
                        <!-- single two -->
                        <div class="single-listing">
                            <div class="small-section-tittle2 pt-80">
                                <h4>Job Location</h4>
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="location">
                                    <option selected disabled>Select Location</option>
                                    @foreach ($lokasi as $lks)
                                    <option value="{{$lks}}">{{$lks}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--  Select job items End-->
                        </div>
                        <div class="single-listing">
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80">
                                <div class="small-section-tittle2">
                                    <h4>Job Type</h4>
                                </div>
                                <label class="container">Full Time
                                    <input type="checkbox" name="type" value="Full Time" onclick="onlyOne(this)">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Part Time
                                    <input type="checkbox" name="type" value="Part Time" onclick="onlyOne(this)">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Remote
                                    <input type="checkbox" name="type" value="Remote" onclick="onlyOne(this)">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Freelance
                                    <input type="checkbox" name="type" value="Freelance" onclick="onlyOne(this)">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Internship
                                    <input type="checkbox" name="type" value="Internship" onclick="onlyOne(this)">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                        <div class="single-listing">
                            <div class="small-section-tittle2 pt-30">
                                <button class="form-control btn head-btn1" type="submit"
                                    id="button-addon2">Search</button>
                            </div>
                        </div>
                </div>
                </form>
                <!-- Job Category Listing End -->
            </div>
            <!-- Right content -->
            <div class="col-xl-9 col-lg-9 col-md-8">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                        <!-- Count of Job list Start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="count-job mb-35">
                                    <span>{{ $job->total() }} Jobs found</span>
                                    <!-- Select job items start -->
                                    <div class="select-job-items">
                                        <span>Disjob - Job Listing</span>
                                    </div>
                                    <!--  Select job items End-->
                                </div>
                            </div>
                        </div>
                        <!-- Count of Job list End -->
                        <!-- single-job-content -->
                        @foreach($job as $data)
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <img src="{{ asset('image/'.$data->logo_perusahaan) }}" alt=""
                                        style="height: 85px;">
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
                </section>
                <!-- Featured_job_end -->
                <!--Pagination Start  -->
                <div class="pagination-area pb-115 text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-wrap d-flex justify-content-center">
                                    <nav aria-label="Page navigation example">
                                        {{ $job->withQueryString()->links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Pagination End  -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
<script>
    function onlyOne(checkbox) {
        var checkboxes = document.getElementsByName('type')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
</script>
@endsection
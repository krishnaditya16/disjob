@extends('layouts.main')

@section('title', 'Jobs List')
@section('content')
<!-- Hero Area Start-->
<div class="slider-area ">
        <div class="single-slider section-overly d-flex align-items-center" data-background="{{asset('assets/homepage/img/hero/about.jpg') }}" style="height: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Jobs List</h2>
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
                                    <h4>Jobs List For Your Company</h4>                       
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                        </div>
                                        @endif
                                        <div class="pt-10">
                                            <div class="float-left" id="ExportReport"></div>
                                        </div> <br><hr>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover text-nowrap data-table" id="data-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Title</th>
                                                            <th>Description</th>
                                                            <th>Total Vacancy</th>
                                                            <th>Aksi</th>
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
                        </div>
                        </section>
                        <!-- Featured_job_end -->
                </div>
            </div>
        </div>
        <!-- Job List Area End -->

</section>

<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: "{{ route('add-jobs.index') }}",
            columns: [
                {data: 'title', name: 'title'},
                {data: 'deskripsi', name: 'deskripsi'},
                {data: 'jumlah_lowongan', name: 'jumlah_lowongan'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10', '25', '50', 'All' ]
            ],
        });

        var buttons = new $.fn.dataTable.Buttons(table, {
            responsive: true,
                    buttons: [
                        {extend:'copy', text: '<i class="fas fa-copy"></i> Copy', className: 'genric-btn success-border small', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Job ' + n; } },
                        {extend:'csv', text: '<i class="fas fa-file-csv"></i> CSV', className: 'genric-btn success-border small', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Job ' + n; } },
                        {extend: 'excel', text: '<i class="fas fa-file-excel"></i> Excel', className: 'genric-btn success-border small', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Job ' + n; } },
                        {extend: 'pdf', text: '<i class="fas fa-file-pdf"></i> PDF', className: 'genric-btn success-border small', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Job ' + n; } },
                        {extend:'print', text: '<i class="fas fa-print"></i> Print', className: 'genric-btn success-border small', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Job ' + n; } },
                    ],
        }).container().appendTo($('#ExportReport'));
    });
    </script>

@endsection

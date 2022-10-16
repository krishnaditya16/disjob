@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'job'
])

@section('title', 'Lihat Data Job')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Halaman Job</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/job">Job</a></li>
                <li class="breadcrumb-item active">Lihat Data</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Job : <i>{{ $job->title }}</i></h3>
                        </div>    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover text-nowrap" id="example1">
                                <tbody>
                                    <tr>
                                        <th style="width:20%">ID</th>
                                        <td>{{ $job->id }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Job Title</th>
                                        <td>{{ $job->title }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Lokasi</th>
                                        <td>{{ $job->lokasi_job }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Kategori</th>
                                        <td>{{ $job->kategori_job }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Tipe Pekerjaan</th>
                                        <td>{{ $job->tipe_job }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Deskripsi Pekerjaan</th>
                                        <td>{{ $job->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Jumlah Lowongan</th>
                                        <td>{{ $job->jumlah_lowongan }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Deadline</th>
                                        <td>{{ $job->deadline }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Gaji/Kisaran Gaji</th>
                                        <td>{{ $job->gaji }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Kemampuan dan Pengetahuan</th>
                                        <td>{!! $job->kemampuan !!}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:20%">Pengalaman dan Pendidikan</th>
                                        <td>{!! $job->pengalaman !!}</td>
                                    </tr>
                                </tbody>
                                </table>
                                <a style="margin-top:20px;" class="btn btn-default" href="/admin/job">
                                    Kembali ke Daftar Job
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
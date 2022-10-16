@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'home'
])

@section('title', 'Home')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Home</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <div class="container-fluid">
    <!-- Main content -->
    <div class="card">
      <div class="card-header">
        
        <h3 class="card-title"><i class="fas fa-bullhorn"></i>&nbsp;Pengumuman</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Selamat Datang di Admin Panel DisJob!!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">  
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Users</span>
              <span class="info-box-number">{{DB::table('users')->count();}}</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-briefcase"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Pekerjaan</span>
              <span class="info-box-number">{{DB::table('jobs')->count();}}</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="fas fa-tags"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Kategori</span>
              <span class="info-box-number">{{DB::table('kategori')->count();}}</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-secondary"><i class="fas fa-building"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Data Perusahaan</span>
              <span class="info-box-number">{{DB::table('perusahaan')->count();}}</span>
            </div>
          </div>
        </div>

      </div>
    </div>    
@endsection
@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'lokasi'
])

@section('title', 'Tambah Data Lokasi')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Tambah Data Lokasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/lokasi">Lokasi</a></li>
                <li class="breadcrumb-item active">Tambah Data</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada kesalahan dalam input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Lokasi</h3>
                        </div> 
                        <form action="{{ route('lokasi.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label>Lokasi Kerja</label>
                                <input type="text" name="lokasi_kerja" class="form-control" required>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" name="submit" class="btn btn-primary" title="Simpan Data"> <i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
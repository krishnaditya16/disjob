@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'perusahaan'
])

@section('title', 'Edit Data Perusahaan')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Edit Data Perusahaan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/perusahaan">Perusahaan</a></li>
                <li class="breadcrumb-item active">Edit Data</li>
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
                            <h3 class="card-title">Edit Data Perusahaan</h3>
                        </div> 
                        <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                            <label>Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" class="form-control" value="{{ $perusahaan->nama_perusahaan }}" required>
                            </div>
                            <div class="form-group">
                            <label>Email Perusahaan</label>
                                <input type="text" name="email" class="form-control" value="{{ $perusahaan->email }}" required>
                            </div>
                            <div class="form-group">
                            <label>Deskripsi Pekerjaan</label>
                                <textarea class="form-control" style="height:100px" name="deskripsi_perusahaan" required>{{ $perusahaan->deskripsi_perusahaan }}</textarea>
                            </div>
                            <div class="form-group">
                            <label>Alamat Website Perusahaan</label>
                                <input type="text" name="alamat_website" class="form-control" value="{{ $perusahaan->alamat_website }}" required>
                            </div>
                            <div class="form-group">
                            <label>Upload Logo Baru <label style="color:red">(File Types : jpeg, png, jpg, gif, svg | Max Size : 2 Mb)</label></label>
                                <!-- <input type="file" name="logo_perusahaan" class="form-control"> -->
                                <div class="custom-file">
                                    <input type="file" name="logo_perusahaan" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                            </div>
                            <div class="form-group">
                            <label>Logo Perusahaan Sekarang</label><br>
                                <img src="/image/{{ $perusahaan->logo_perusahaan }}" width="150px">
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

    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
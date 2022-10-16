@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'job'
])

@section('title', 'Tambah Data Job')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Tambah Data Job</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/job">Job</a></li>
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
                            <h3 class="card-title">Tambah Data Job</h3>
                        </div> 
                        <form action="{{ route('job.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label>Jobs Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Perusahaan</label>
                                <select class="form-control" name="perusahaan_job">
                                    <option selected>-- Pilih Opsi --</option>
                                    @foreach ($perusahaan as $prs)
                                        <option value="{{ $prs->nama_perusahaan }}">{{ $prs->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Lokasi</label>
                                <select class="form-control" name="lokasi_job">
                                    <option selected>-- Pilih Opsi --</option>
                                    @foreach ($lokasi as $lks)
                                        <option value="{{ $lks->lokasi_kerja }}">{{ $lks->lokasi_kerja }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Kategori</label>
                                <select class="form-control" name="kategori_job">
                                    <option selected>-- Pilih Opsi --</option>
                                    @foreach ($kategori as $ktg)
                                        <option value="{{ $ktg->nama_kategori }}">{{ $ktg->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Tipe Pekerjaan</label>
                                <select class="form-control" name="tipe_job">
                                    <option selected disabled>-- Pilih Opsi --</option>
                                    @foreach ($tipe as $tip)
                                        <option value="{{ $tip->tipe_kerja }}">{{ $tip->tipe_kerja }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Alamat Kantor</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Deskripsi Pekerjaan</label>
                                <textarea class="form-control" style="height:100px" name="deskripsi" required></textarea>
                            </div>
                            <div class="form-group">
                            <label>Pengetahuan & Kemampuan yang Diperlukan</label>
                                <!-- <textarea class="form-control" style="height:100px" name="kemampuan" required></textarea> -->
                                <textarea class="ckeditor form-control" name="kemampuan" required></textarea>
                            </div>
                            <div class="form-group">
                            <label>Edukasi & Pengalaman Kerja yang Diperlukan</label>
                                <!-- <textarea class="form-control" style="height:100px" name="pengalaman" required></textarea> -->
                                <textarea class="ckeditor form-control" name="pengalaman" required></textarea>
                            </div>
                            <div class="form-group">
                            <label>Jumlah Lowongan</label>
                                <input type="number" name="jumlah_lowongan" class="form-control" required>
                            </div> 
                            <div class="form-group">
                            <label>Gaji/Kisaran Gaji</label>
                                <input type="text" name="gaji" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Deadline</label>
                                <input type="date" name="deadline" class="form-control" required>
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

    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    
@endsection
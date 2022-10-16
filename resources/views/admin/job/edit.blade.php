@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'job'
])

@section('title', 'Edit Data Job')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Edit Data Job</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/job">Job</a></li>
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
                            <h3 class="card-title">Edit Data Job</h3>
                        </div> 
                        <form action="{{ route('job.update', $job->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                            <label>Job Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $job->title }}" required>
                            </div>
                            <div class="form-group">
                            <label>Perusahaan</label>
                                <select class="form-control" name="perusahaan_job">
                                    <option selected>-- Pilih Opsi --</option>
                                    @foreach ($perusahaan as $prs)
                                        <option value="{{ $prs->nama_perusahaan }}" @if($job->perusahaan_job=="$prs->nama_perusahaan") selected="selected" @endif>{{ $prs->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Lokasi</label>
                                <select class="form-control" name="lokasi_job">
                                    <option selected>-- Pilih Opsi --</option>
                                    @foreach ($lokasi as $lks)
                                        <option value="{{ $lks->lokasi_kerja }}" @if($job->lokasi_job=="$lks->lokasi_kerja") selected="selected" @endif>{{ $lks->lokasi_kerja }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Kategori</label>
                                <select class="form-control" name="kategori_job">
                                    <option selected>-- Pilih Opsi --</option>
                                    @foreach ($kategori as $ktg)
                                        <option value="{{ $ktg->nama_kategori }}" @if($job->kategori_job=="$ktg->nama_kategori") selected="selected" @endif>{{ $ktg->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Tipe Pekerjaan</label>
                                <select class="form-control" name="tipe_job">
                                    <option selected disabled>-- Pilih Opsi --</option>
                                    @foreach ($tipe as $tip)
                                        <option value="{{ $tip->tipe_kerja }}" @if($job->tipe_job=="$tip->tipe_kerja") selected="selected" @endif>{{ $tip->tipe_kerja }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Alamat Kantor</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $job->alamat }}" required>
                            </div>
                            <div class="form-group">
                            <label>Deskripsi Pekerjaan</label>
                                <textarea class="form-control" style="height:100px" name="deskripsi" required>{{ $job->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                            <label>Pengetahuan & Kemampuan yang Diperlukan</label>
                                <!-- <textarea class="form-control" style="height:100px" name="kemampuan" required>{{ $job->kemampuan }}</textarea> -->
                                <textarea class="ckeditor form-control" name="kemampuan" required>{!! $job->kemampuan !!}</textarea>
                            </div>
                            <div class="form-group">
                            <label>Edukasi & Pengalaman Kerja yang Diperlukan</label>
                                <!-- <textarea class="form-control" style="height:100px" name="pengalaman" required>{{ $job->pengalaman }}</textarea> -->
                                <textarea class="ckeditor form-control" name="pengalaman" required>{!! $job->pengalaman !!}</textarea>
                            </div>
                            <div class="form-group">
                            <label>Jumlah Lowongan</label>
                                <input type="number" name="jumlah_lowongan" class="form-control" value="{{ $job->jumlah_lowongan }}" required>
                            </div>
                            <div class="form-group">
                            <label>Gaji/Kisaran Gaji</label>
                                <input type="text" name="gaji" class="form-control" value="{{ $job->gaji }}" required>
                            </div>
                            <div class="form-group">
                            <label>Deadline</label>
                                <input type="date" name="deadline" class="form-control" value="{{ $job->deadline }}" required>
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
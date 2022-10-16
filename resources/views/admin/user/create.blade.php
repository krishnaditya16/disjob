@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'user'
])

@section('title', 'Tambah Data User')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Tambah Data User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/user">User</a></li>
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
                            <h3 class="card-title">Tambah Data User</h3>
                        </div> 
                        <form action="{{ route('user.store') }}" method="post">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                            <label>Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Level</label>
                                <select class="form-control" name="role">
                                    <option selected disabled>-- Pilih Opsi --</option>
                                    <option value="admin">Admin</option>
                                    <option value="employer">Employer</option>
                                    <option value="user">User</option>
                                </select>
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

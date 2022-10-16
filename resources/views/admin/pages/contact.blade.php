@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'contact'
])

@section('title', 'Contact')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Contact</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Anggota Tim
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>I Gusti Ngurah Agung Krishna Aditya</b></h2>
                      <p class="text-muted text-sm"><b>NIM : </b>1915323055<br><b>Kelas :</b> 5C-MI</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: Jl. Test No. 123, Kota Test 01234</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No. Telepon: +62 82 12 34 56</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{asset('assets/img/profile_picture.png') }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fab fa-whatsapp"></i> Whatsapp
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fab fa-facebook"></i> Facebook
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Anggota Tim
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>I Made Arya Sadiva Ambara</b></h2>
                      <p class="text-muted text-sm"><b>NIM : </b>1915323063<br><b>Kelas :</b> 5C-MI</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: Jl. Test No. 123, Kota Test 01234</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No. Telepon: +62 82 12 34 56</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{asset('assets/img/profile_picture.png') }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fab fa-whatsapp"></i> Whatsapp
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fab fa-facebook"></i> Facebook
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Anggota Tim
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>I Nyoman Ary Wirawan Saputra</b></h2>
                      <p class="text-muted text-sm"><b>NIM : </b>1915323023<br><b>Kelas :</b> 5C-MI</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: Jl. Test No. 123, Kota Test 01234</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No. Telepon: +62 82 12 34 56</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{asset('assets/img/profile_picture.png') }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fab fa-whatsapp"></i> Whatsapp
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fab fa-facebook"></i> Facebook
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Anggota Tim
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>I Putu Agus Eka Wirayuda</b></h2>
                      <p class="text-muted text-sm"><b>NIM : </b>1915323019<br><b>Kelas :</b> 5C-MI</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: Jl. Test No. 123, Kota Test 01234</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No. Telepon: +62 82 12 34 56</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{asset('assets/img/profile_picture.png') }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fab fa-whatsapp"></i> Whatsapp
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fab fa-facebook"></i> Facebook
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Anggota Tim
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>I Gusti Putu Wika Wardana</b></h2>
                      <p class="text-muted text-sm"><b>NIM : </b>1915323015<br><b>Kelas :</b> 5C-MI</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: Jl. Test No. 123, Kota Test 01234</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No. Telepon: +62 82 12 34 56</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{asset('assets/img/profile_picture.png') }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fab fa-whatsapp"></i> Whatsapp
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fab fa-facebook"></i> Facebook
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                    Anggota Tim
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>I Gede Leo Partha</b></h2>
                      <p class="text-muted text-sm"><b>NIM : </b>1915323031<br><b>Kelas :</b> 5C-MI</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat: Jl. Test No. 123, Kota Test 01234</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> No. Telepon: +62 82 12 34 56</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="{{asset('assets/img/profile_picture.png') }}" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fab fa-whatsapp"></i> Whatsapp
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fab fa-facebook"></i> Facebook
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        </div>
      <!-- /.card -->
@endsection
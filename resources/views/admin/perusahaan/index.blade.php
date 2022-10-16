@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'perusahaan'
])

@section('title', 'Kelola Data Perusahaan')

@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> 
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Perusahaan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Perusahaan</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    @if ($message = Session::get('success'))
    <div class="container-fluid">
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    </div>
    @endif

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left" id="ExportReport">                               
                            </div>
                        </div>    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover text-nowrap data-table" id="data-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Logo Perusahaan</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Email</th>
                                            <th>Alamat Website</th>
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

    <script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            autoWidth: false,
            processing: true,
            serverSide: true,
            ajax: "{{ route('perusahaan.index') }}",
            columns: [
                {data: 'id', name: 'id'},              
                {data: 'logo_perusahaan', name: 'logo_perusahaan',
                    render: function( data, type, full, meta ) {
                        return "<img src=\"/image/" + data + "\" height=\"75\"/>";
                    }
                },
                {data: 'nama_perusahaan', name: 'nama_perusahaan'},
                {data: 'email', name: 'email'},
                {data: 'alamat_website', name: 'alamat_website'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            columnDefs: [
                {
                    targets: 0,
                    className: 'text-center',
                },
                {
                    targets: 1,
                    className: 'text-center',
                }
            ],
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10', '25', '50', 'All' ]
            ],
        });

        var buttons = new $.fn.dataTable.Buttons(table, {
            responsive: true,
                    buttons: [
                        {text: '<i class="fa fa-plus-circle"></i> Tambah Data', className: 'btn btn-success btn-sm', 
                            action: function ( e, dt, node, config ) {
                                window.location = window.location.href.replace(/\/+$/, "") + '/create';
                        }},
                        {extend:'copy', text: '<i class="fas fa-copy"></i> Copy', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Perusahaan ' + n; } },
                        {extend:'csv', text: '<i class="fas fa-file-csv"></i> CSV', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Perusahaan ' + n; } },
                        {extend: 'excel', text: '<i class="fas fa-file-excel"></i> Excel', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Perusahaan ' + n; } },
                        {extend: 'pdf', text: '<i class="fas fa-file-pdf"></i> PDF', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Perusahaan ' + n; } },
                        {extend:'print', text: '<i class="fas fa-print"></i> Print', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Perusahaan ' + n; } },
                        {extend:'colvis', className: 'btn btn-default btn-sm'},
                    ],
        }).container().appendTo($('#ExportReport'));

    });
    </script>
@endsection
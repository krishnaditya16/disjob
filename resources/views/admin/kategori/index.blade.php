@extends('layouts.admin', [
    'class' => '',
    'elementActive' => 'kategori'
])

@section('title', 'Kelola Data Kategori')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Data Kategori</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                <li class="breadcrumb-item active">Kategori</li>
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
                                            <th>Nama Kategori</th>
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
            ajax: "{{ route('kategori.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nama_kategori', name: 'nama_kategori'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            columnDefs: [
                {
                    targets: 0,
                    className: 'text-center',
                },
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
                        {extend:'copy', text: '<i class="fas fa-copy"></i> Copy', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Kategori ' + n; } },
                        {extend:'csv', text: '<i class="fas fa-file-csv"></i> CSV', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Kategori ' + n; } },
                        {extend: 'excel', text: '<i class="fas fa-file-excel"></i> Excel', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Kategori ' + n; } },
                        {extend: 'pdf', text: '<i class="fas fa-file-pdf"></i> PDF', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Kategori ' + n; } },
                        {extend:'print', text: '<i class="fas fa-print"></i> Print', className: 'btn btn-default btn-sm', exportOptions: {columns: ':not(:last-child)',}, title: function(){ var d = new Date(); var n = d.toLocaleDateString().split('T')[0]; return 'Laporan Kategori ' + n; } },
                        {extend:'colvis', className: 'btn btn-default btn-sm'},
                    ],
        }).container().appendTo($('#ExportReport'));
    });
    </script>
@endsection
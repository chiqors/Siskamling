@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Penjaga
        <small>Sistem Kamling</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Penjaga</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @if(session('success'))
      <div class="alert alert-success">
        <p>{{ session('success') }}</p>
      </div>
      @endif
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('penjaga/add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nomor Penjaga</th>
                <th>Nama Penjaga</th>
                <th>Alamat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($penjaga as $row)
              <tr>
                <!-- <td>{{ $row->id_kelas }}</td> -->
                <td>{{ $row->no_penjaga }}</td>
                <td>{{ $row->nama_penjaga }}</td>
                <td>{{ $row->alamat }}</td>
                <td>
                  <a href="{{ url('penjaga/' . $row->no_penjaga . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                  <a href="{{ url('penjaga/' . $row->no_penjaga . '/delete') }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection

@push("style")
<!-- <link rel="stylesheet" href="datepicker.css" /> -->
@endpush

@push('script')
<!-- <script type="text/javascript" href="bootstrap.js"></script> -->
@endpush
@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($edit) ? 'Tambah' : 'Edit'}} Data Tugas
        <small>Sistem Kamling</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('tugas') }}">Data Tugas</a></li>
        <li class="active">{{ empty($edit) ? 'Tambah' : 'Edit'}} Tugas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @if(session('error'))
      <div class="alert alert-danger">
        <p>{{ session('error') }}</p>
      </div>
      @endif
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('tugas') }}" class="btn btn-info"><i class="fa fa-chevron-left"></i> Kembali</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
          <div class="box-body">
            <form action="" method="POST" action="{{ empty($edit) ? url('tugas/add') : url('tugas/' . @$result->id_tugas . '/edit') }}" role="form">
              {{ csrf_field() }}
              
              @if(!empty($result))
                {{ method_field('PATCH') }}
              @endif
              <div class="form-group">
                <label for="tugas">Nama Tugas</label>
                <input type="text" class="form-control" name="nama_tugas" id="Nama_tugas" placeholder="Tugas.." value="{{ @$result->nama_tugas }}" />
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
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
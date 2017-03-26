@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($edit) ? 'Tambah' : 'Edit'}} Data Kelas
        <small>SMK Negeri 4 Bandung</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('kelas') }}">Data Kelas</a></li>
        <li class="active">{{ empty($edit) ? 'Tambah' : 'Edit'}} Kelas</li>
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
          <a href="{{ url('kelas') }}" class="btn btn-info"><i class="fa fa-chevron-left"></i> Kembali</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
          <div class="box-body">
            <form action="" method="POST" action="{{ empty($edit) ? url('kelas/add') : url('kelas/' . @$result->id_kelas . '/edit') }}" role="form">
              {{ csrf_field() }}
              
              @if(!empty($result))
                {{ method_field('PATCH') }}
              @endif
              
              <div class="form-group">
                <label for="namakelas">Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Kelas.." value="{{ @$result->nama_kelas }}">
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" id="Jurusan" placeholder="Jurusan.." value="{{ @$result->jurusan }}">
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
@extends('template.header')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($edit) ? 'Tambah' : 'Edit'}} Data Jadwal
        <small>Sistem Kamling</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ url('jadwal') }}">Data Jadwal</a></li>
        <li class="active">{{ empty($edit) ? 'Tambah' : 'Edit'}} Jadwal</li>
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
          <a href="{{ url('jadwal') }}" class="btn btn-info"><i class="fa fa-chevron-left"></i> Kembali</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
          <div class="box-body">
            <form method="POST" action="{{ empty($edit) ? url('jadwal/add') : url('jadwal/' . @$result->id_jadwal . '/edit') }}" role="form">
              {{ csrf_field() }}
              
              @if(!empty($result))
                {{ method_field('PATCH') }}
              @endif
              <div class="form-group">
                <label for="">Mulai</label>
                <input type="text" class="form-control" name="mulai" id="Mulai" placeholder="Waktu Mulai (Format 24 Jam).." value="{{ @$result->mulai }}" />
              </div>
              <div class="form-group">
                <label for="">Selesai</label>
                <input type="text" class="form-control" name="selesai" id="Selesai" placeholder="Waktu Selesai (Format 24 Jam).." value="{{ @$result->selesai }}" />
              </div>
              <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="Tanggal" placeholder="Tanggal.." value="{{ @$result->tanggal }}" />
              </div>
              <div class="form-group">
                <label for="">Nomor Pos</label>
                <input type="text" class="form-control" name="id_pos" id="Id_pos" placeholder="Nomor Pos.." value="{{ @$result->id_pos }}" />
              </div>
              <div class="form-group">
                <label for="">Nomor Tugas</label>
                <input type="text" class="form-control" name="id_tugas" id="Id_tugas" placeholder="Nomor Tugas.." value="{{ @$result->id_tugas }}" />
              </div>
              <div class="form-group">
                <label for="">Nomor Penjaga</label>
                <input type="text" class="form-control" name="no_penjaga" id="no_penjaga" placeholder="Nomor Penjaga.." value="{{ @$result->no_penjaga }}" />
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
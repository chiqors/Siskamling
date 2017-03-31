@extends('template.header')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data jadwal
        <small>Sistem Kamling</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pos</li>
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
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped">
          <?php
            $arrDate = array();
            $arrPerson = array();
            foreach ($result as $row) {
              if(count($arrDate) > 0){
                for($i = 0;$i < count($arrDate);$i++){
                 if($arrDate[$i] != $row->tanggal){
                   array_push($arrDate, $row->tanggal);
                 }
                }
              }else {
                   array_push($arrDate, $row->tanggal);                
              }
            }
              for($i = 0;$i < count($arrDate);$i++){
                $key = $arrDate[$i];
                $value = array();
                $arrPerson[$key] = $value;
              }
              
            foreach ($result as $row) {
               array_push($arrPerson[$row->tanggal], $row->penjaga->nama_penjaga);
            }
            // print_r($arrDate);
            print_r($arrPerson);           
           ?>
            <thead>
              <tr>
                  <!-- TODO HERE -->
                  <?php 
                    for($i = 0 ; $i < count($arrDate) ; $i++){
                      echo "<th>".$arrDate[$i]."</th>";
                    }
                  ?>
              </tr>
            </thead>
            <tbody>
                <!-- TODO HERE -->
                <?php echo "<tr>"; ?>
                <?php 
                    for($i = 0 ; $i < count($arrPerson) ; $i++){
                      // if (count($arrPerson[$i]) > 1) {
                        
                          for ($j=0; $j <count($arrPerson[$arrDate[$i]]) ; $j++) { 
                            # code...
                            echo "<td>".$arrPerson[$arrDate[$i]][$j]."</td>";
                          }
                      // }else{
                      //   echo "<tr>".$arrPerson[$i][$i]."</tr>";
                      // }
                    }
                  ?>
                <?php echo "</tr>"; ?>
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
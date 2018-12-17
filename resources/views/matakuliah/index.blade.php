@extends('layouts.master')

@section('content')

@include('layouts.nav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Matakuliah</h3>
               <a href="{{url('/matakuliah/create')}}">
                  <button class="btn btn-info pull-right"><i class="fa fa-plus-square"></i> Tambah Matakuliah</button>
               </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Matkuliah</th>
                  <th>Tempat</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($matakuliah as $key => $value)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$value->nama_matakuliah}}</td>
                  <td>{{$value->tempat}}</td>
                  <td>{{$value->hari}}</td>
                  <td>{{$value->jam}}</td>
                  <td>
                  	<a href="{{ route('matakuliah.show', ['id' => $value->id_matakuliah]) }}">
                      <button type="submit" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i></button>
                    </a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('matakuliah/' . $value->id_matakuliah . '/edit') }}"><i class="fa fa-edit"></i></a>
                    
                    <a href="{{ route('matakuliah.delete', ['id' => $value->id_matakuliah]) }}">
                      <button type="submit" class="btn btn-info" onclick="return confirm('Are you sure want to delete this?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </a>

                  </td>
                </tr>
                 @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@include('layouts.footer')
@endsection
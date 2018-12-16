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
              <h3 class="box-title">Data Mahasiswa</h3>
               <a href="{{url('/mahasiswa/create')}}">
                  <button class="btn btn-info pull-right"><i class="fa fa-plus-square"></i> Tambah Mahasiswa</button>
               </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($mahasiswa as $key => $value)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$value->nama}}</td>
                  <td>{{$value->alamat}}</td>
                  <td>
                    <a href="{{ route('mahasiswa.show', ['id' => $value->id_mahasiswa]) }}">
                      <button type="submit" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i></button>
                    </a>
                    <a class="btn btn-small btn-info" href="{{ URL::to('mahasiswa/' . $value->id_mahasiswa . '/edit') }}"><i class="fa fa-edit"></i></a>
                    
                    <a href="{{ route('mahasiswa.delete', ['id' => $value->id_mahasiswa]) }}">
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
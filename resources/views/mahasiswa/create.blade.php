@extends('layouts.master')

@section('content')

@include('layouts.nav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content col-md-6">
      <div class="box box-info ">
            <div class="box-header with-border">
              <h3 class="box-title">Mahasiswa Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" method="POST" action="{{route('mahasiswa.store')}}">
            	 {{csrf_field()}}
              <div class="box-body">
                  <div class="form-group">
  		              <label for="inputNama" class="col-sm-2 control-label">Nama</label>
      		          <div class="col-sm-8">
        			          <input type="text" class="form-control" placeholder="Nama" name="nama" id="inputNama">
        			      </div>
  		            </div>
      		        <div class="form-group">
      		          <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>
      		          <div class="col-sm-8">
        			          <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="inputAlamat">
        			      </div>
      		        </div>
                  <div class="form-group">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-8">
                        <label >Pilih Matakuliah</label>
                        <select class="form-control" name="matakuliah">
                           @foreach ($matakuliah as $matakuliah)
                          <option value="{{$matakuliah->id_matakuliah}}">{{$matakuliah->nama_matakuliah}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
		      </div>
		      <div class="box-footer">
		        <button type="submit" class="btn btn-primary">Submit</button>
		      </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>
    <!-- /.content -->
  </div>
@include('layouts.footer')
@endsection
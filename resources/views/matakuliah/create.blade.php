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
              <h3 class="box-title">Mata Kuliah Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" method="POST" action="{{route('matakuliah.store')}}">
            	 {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
    		          <label for="inputNama" class="col-sm-3 control-label">Nama Mata kuliah</label>
    		          <div class="col-sm-8">
      			          <input type="text" class="form-control" placeholder="Nama" name="nama_matakuliah" id="inputNama">
      			      </div>
		            </div>
    		        <div class="form-group">
    		          <label for="inputAlamat" class="col-sm-3 control-label">tempat</label>
    		          <div class="col-sm-8">
      			          <input type="text" class="form-control" placeholder="Alamat" name="tempat" id="inputAlamat">
      			      </div>
                </div>
                <div class="form-group">
                  <label for="inputhari" class="col-sm-3 control-label">hari</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Alamat" name="hari" id="inputDate">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputhari" class="col-sm-3 control-label">jam</label>
                  <div class="col-sm-8">
                      <input type="time" class="form-control" placeholder="Alamat" name="jam" id="inputDate">
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
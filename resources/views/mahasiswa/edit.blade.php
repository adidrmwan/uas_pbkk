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
              <h3 class="box-title">Mahasiswa Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" method="POST" action="{{route('mahasiswa.update', $mahasiswa->id_mahasiswa)}}">
            	 {{csrf_field()}}
            	 <input name="_method" type="hidden" value="PUT">
              <div class="box-body">
                <div class="form-group">
		          <label for="inputNamaEdit" class="col-sm-2 control-label">Nama</label>
		          <div class="col-sm-8">
			          <input type="text" class="form-control" placeholder="Nama" name="nama" id="inputNamaEdit" value="{{$mahasiswa->nama}}">
			      </div>
		        </div>
		        <div class="form-group">
		          <label for="inputAlamatEdit" class="col-sm-2 control-label">Alamat</label>
		          <div class="col-sm-8">
			          <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="inputAlamatEdit" value="{{$mahasiswa->alamat}}">
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

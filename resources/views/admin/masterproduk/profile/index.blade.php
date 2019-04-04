@extends('admin.layouts.header')
@section('admin')
<div class="container">
<form method="POST" action="{{url('dashboard/profile/update')}}" enctype="multipart/form-data">
  @csrf
  <div class="col-sm-12">
      <div class="col-sm-6">
      <div class="form-group">
        <label class=" form-control-label">Nama</label>
        <div class="input-group">           
            <input value ="{{$data->nama}}"name="nama" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
      </div>
      </div>

      <div class="col-sm-6">
      <div class="form-group">
        <label class=" form-control-label">Nomor Telepon</label>
        <div class="input-group">           
            <input value ="{{$data->telp}}" name="telp" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
      </div>
      </div>

      <div class="col-sm-6">
      <div class="form-group">
        <label class=" form-control-label">Kode Pos</label>
        <div class="input-group">           
            <input value ="{{$data->kode_pos}}" name="kode_pos" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
      </div>
      </div>

      <div class="col-sm-6">
      <div class="form-group">
        <label class=" form-control-label">Deskripsi</label>
        <div class="input-group">           
            <textarea class="form-control" name="deskripsi" row="6" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">{{$data->deskripsi}}</textarea>
        </div>
      </div>
      </div>
  	
  		<div class="col-md-4">
            <div class="card">
                <img class="card-img-top" style="height:200px;" src="{{url('images/'.$data->gambar)}}">
                <div class="card-body">
                    <h4 class="card-title mb-3">Input foto profile</h4>
					  <input type="file" name="gambar" class="form-control">	
                </div>
            </div>
        </div>
  		
	</div>
  <input type="hidden" name="id" value="{{$data->id}}">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
@endsection

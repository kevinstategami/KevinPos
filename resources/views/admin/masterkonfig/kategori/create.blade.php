@extends('admin.layouts.header')
@section('admin')
<div class="container">
<form method="POST" action="{{url('dashboard/kategori/post')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label class=" form-control-label">Nama Kategori</label>
      <div class="input-group">
          <div class="input-group-addon"><i class="fa ti-tablet"></i></div>
          <input name="kategori" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
@endsection

@extends('admin.layouts.header')
@section('admin')
<div class="container">
<form method="POST" action="{{url('dashboard/karyawan/update')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label class=" form-control-label">Nama</label>
      <div class="input-group">
          <input name="name" value="{{$edit->name}}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>

  <div class="form-group">
      <label class=" form-control-label">Username</label>
      <div class="input-group">
          <input name="username" value="{{$edit->username}}" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>
  
  <div class="form-group">
      <label class=" form-control-label">Telp</label>
      <div class="input-group">
          <input type="number" value="{{$edit->telp}}" name="telp" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>

  <div class="form-group">
      <label class=" form-control-label">Password</label>
      <div class="input-group">
          <input name="password" type="password" placeholder="********" value="" class="form-control">
      </div>
  </div>

  <div class="form-group">     
  	<label class=" form-control-label">Hak Akses</label>
         <select name="role" class="form-control-sm form-control">
          <option value="{{$edit->role}}" selected="true">Choose One</option>                    
           <option value="Super Admin">Super Admin</option>         
           <option value="Admin Gudang">Admin Gudang</option>         
           <option value="Kasir">Kasir</option>         
         </select>
  </div>
  <input type="hidden" name="id" value="{{$edit->id}}">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
@endsection

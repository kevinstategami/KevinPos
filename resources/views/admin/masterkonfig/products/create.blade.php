@extends('admin.layouts.header')
@section('admin')
<div class="container">
<form method="POST" action="{{url('dashboard/products/post')}}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <label class=" form-control-label">Nama</label>
      <div class="input-group">
          <input name="nama" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>
  
  <div class="form-group">
      <label class=" form-control-label">Stok</label>
      <div class="input-group">
          <input type="number" name="stock" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>

  <div class="form-group">     
  	<label class=" form-control-label">Kategori</label>       
         <select name="kategori" class="form-control-sm form-control">           
          <option selected="true" disabled="disabled">Choose one</option>
         @foreach($kategori as $kategori)
           <option value="{{$kategori->kategori}}">{{$kategori->kategori}}</option>           
         @endforeach
         </select>
  </div>

  <div class="form-group">     
  	<label class=" form-control-label">Curr</label>       
         <select name="curr" class="form-control-sm form-control">           
          <option selected="true" disabled="disabled">Choose one</option>
         @foreach($curr as $curr)
           <option value="{{$curr->curr}}">{{$curr->curr}}</option>           
         @endforeach
         </select>
  </div>

  <div class="form-group">     
  	<label class=" form-control-label">Unit</label>
         <select name="unit" class="form-control-sm form-control">
          <option selected="true" disabled="disabled">Choose one</option>
         @foreach($unit as $unit)
           <option value="{{$unit->unit}}">{{$unit->unit}}</option>           
         @endforeach
         </select>
  </div>

  <div class="form-group">
      <label class=" form-control-label">Harga Beli</label>
      <div class="input-group">
          <input type="number" name="harga_beli" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>

  <div class="form-group">
      <label class=" form-control-label">Harga jual</label>
      <div class="input-group">
          <input type="number" name="harga_jual" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>

  <div class="form-group">     
  	<label class=" form-control-label">Disc</label>
         <select name="disc" class="form-control-sm form-control">
          <option value="" selected="true" disabled="disabled">Biarkan Jika Tidak Perlu</option>           
         @foreach($disc as $disc)
           <option value="{{$disc->disc}}">{{$disc->disc}}</option>           
         @endforeach
         </select>
  </div>

  <div class="form-group">
      <label class=" form-control-label">Via</label>
      <div class="input-group">
          <input name="via" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>

  <div class="form-group">
      <label class=" form-control-label">Deskripsi</label>
      <div class="input-group">
          <textarea name="deskripsi" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
      </div>
  </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
@endsection

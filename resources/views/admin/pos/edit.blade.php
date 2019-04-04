@extends('admin.layouts.header')
@section('admin')
<div class="container">
<form method="POST" action="{{url('dashboard/transaksi/update')}}" enctype="multipart/form-data">
  @csrf
  <?php
  	$products = \App\Products::where($edit->nama)->value('stock');
  ?>
  <div class="form-group">
      <label class=" form-control-label">Ubah Stock</label>
      <div class="input-group">
          <div class="input-group-addon"><i class="fa ti-tablet"></i></div>
          <input type="number" max="{{$products}}" name="jumlah" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      </div>
  </div>    
  <input type="hidden" name="id" value="{{$edit->id}}">
    <button type="submit" class="btn btn-primary">Beli</button>
</div>
</form>
</div>
@endsection

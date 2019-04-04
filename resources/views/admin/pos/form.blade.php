@extends('admin.layouts.header')
@section('admin')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row"  >
                <div class="col-md-12">

                  <div class="form-group">
                  <div class="col-sm-12">
                    <div class="col-md-6 text-left">     
                    <label class=" form-control-label">Nama Barang</label>
                      <form method="POST" action="{{url('dashboard/transaksi/post')}}" enctype="multipart/form-data">
                        @csrf
                        <select name="id_barang" class="form-control-sm form-control">           
                          <option selected="true" disabled="disabled">Pilih Barang</option>
                            @foreach($products as $data)
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 text-right">
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                    </div>       
                  </div>                  
                    <div class="card">
                        <div class="card-header">                            
                            <strong class="card-title">Transaksi Pembelanjaan</strong>
                        </div>
                        <div class="card-body">
                  <form method="POST" action="{{url('dashboard/pos/post')}}" enctype="multipart/form-data">
                  @csrf
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($transaksi as $datas)
                      <tr>
                        <td>{{$datas->nama}}</td>
                        <td name="jumlah">{{$datas->stock}}</td>
                        <td name="harga">{{$datas->harga}}</td>
                        <td>
                          <a href="{{url('dashboard/transaksi/edit', $datas->id)}}" class="btn btn-outline-success btn-sm"> Ubah Jumlah </a>
                          <a href="{{url('dashboard/transaksi/delete', $datas->id)}}" class="btn btn-outline-danger btn-sm"> Delete </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <button type="submit" class=btn btn-primary>Beli</button>
                        </div>
                    </div>
                </div>
              </form>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection
@extends('admin.layouts.header')
@section('admin')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Products</strong>
                    <div class="row">
                    <a href="{{url('dashboard/products/create')}}" class="btn btn-outline-primary btn-sm" style="margin-left: 70%;"> Add Data </a> &nbsp
                  </div>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Barcode</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Curr</th>
                <th>Unit</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Discount</th>
                <th>Keterangan</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
            @foreach($products as $data)                            
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->stock}}</td>                
                <td>{{$data->kategori}}</td>
                <td>{{$data->curr}}</td>
                <td>{{$data->unit}}</td>
                <td>{{$data->harga_jual}}</td>
                <td>{{$data->harga_beli}}</td>
                <td>{{$data->disc}}</td>
                <td>{!!substr($data->deskripsi,0,10)!!}...</td>
                <td>
                  <a href="{{url('dashboard/products/edit', $data->id)}}"class="btn btn-outline-success btn-sm"> Edit </a>
                  <a href="{{url('dashboard/products/delete', $data->id)}}" class="btn btn-outline-danger btn-sm"> Delete </a>
                </td>
              </tr>        
             @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection
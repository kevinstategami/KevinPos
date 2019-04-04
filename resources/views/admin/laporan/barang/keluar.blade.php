@extends('admin.layouts.header')
@section('admin')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Barang Keluar</strong>
                    <div class="row">
                    <a href="{{url('dashboard/barang_keluar/destroyall')}}" class="btn btn-outline-danger btn-sm" style="margin-left: 70%;"> Delete All </a> &nbsp
                    <a href="{{url('dashboard/barang_keluar/pdfall')}}" class="btn btn-outline-success btn-sm"> Export PDF </a>
                  </div>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Barcode</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Via</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
            @foreach($data as $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jumlah}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->via}}</td>
                <td>
                  <a href="{{url('dashboard/barang_keluar/pdf', $data->id)}}"class="btn btn-outline-primary btn-sm"> PDF </a>
                  <a href="{{url('dashboard/barang_keluar/delete', $data->id)}}" class="btn btn-outline-danger btn-sm"> Delete </a>
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
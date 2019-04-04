@extends('admin.layouts.header')
@section('admin')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Karyawan</strong>
                    <div class="row">
                    <a href="{{url('dashboard/karyawan/create')}}" class="btn btn-outline-primary btn-sm" style="margin-left: 70%;"> Add Data </a> &nbsp
                    <a href="{{url('dashboard/karyawan/pdfall')}}" class="btn btn-outline-success btn-sm"> Export PDF </a>
                  </div>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Telp</th>
                <th>Hak Akses</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
            @foreach($karyawan as $data)
              <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->telp}}</td>
                <td>{{$data->role}}</td>
                <td>
                  <a href="{{url('dashboard/karyawan/pdf', $data->id)}}"class="btn btn-outline-primary btn-sm"> PDF </a>
                  <a href="{{url('dashboard/karyawan/edit', $data->id)}}"class="btn btn-outline-success btn-sm"> Edit </a>
                  <a href="{{url('dashboard/karyawan/delete', $data->id)}}" class="btn btn-outline-danger btn-sm"> Delete </a>
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
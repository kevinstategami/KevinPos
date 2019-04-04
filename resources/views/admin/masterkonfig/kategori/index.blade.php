@extends('admin.layouts.header')
@section('admin')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Kategori</strong>
                    <div class="row">
                    <a href="{{url('dashboard/kategori/create')}}" class="btn btn-outline-primary btn-sm" style="margin-left: 70%;"> Add Data </a> &nbsp
                  </div>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Kategori</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
            @foreach($kategori as $data)
              <tr>
                <td>{{$data->kategori}}</td>
                <td>
                  <a href="{{url('dashboard/kategori/edit', $data->id)}}"class="btn btn-outline-success btn-sm"> Edit </a>
                  <a href="{{url('dashboard/kategori/delete', $data->id)}}" class="btn btn-outline-danger btn-sm"> Delete </a>
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
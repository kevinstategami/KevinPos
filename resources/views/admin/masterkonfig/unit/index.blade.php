@extends('admin.layouts.header')
@section('admin')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Unit</strong>
                    <div class="row">
                    <a href="{{url('dashboard/unit/create')}}" class="btn btn-outline-primary btn-sm" style="margin-left: 70%;"> Add Data </a> &nbsp
                    <a href="{{url('dashboard/unit/pdfall')}}" class="btn btn-outline-success btn-sm"> Export PDF </a>
                  </div>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Unit</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
            @foreach($unit as $data)
              <tr>
                <td>{{$data->unit}}</td>
                <td>
                  <a href="{{url('dashboard/unit/pdf', $data->id)}}"class="btn btn-outline-primary btn-sm"> PDF </a>
                  <a href="{{url('dashboard/unit/edit', $data->id)}}"class="btn btn-outline-success btn-sm"> Edit </a>
                  <a href="{{url('dashboard/unit/delete', $data->id)}}" class="btn btn-outline-danger btn-sm"> Delete </a>
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
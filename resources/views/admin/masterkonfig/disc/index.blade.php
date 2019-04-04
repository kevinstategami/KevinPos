@extends('admin.layouts.header')
@section('admin')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Discount</strong>
                    <div class="row">
                    <a href="{{url('dashboard/disc/create')}}" class="btn btn-outline-primary btn-sm" style="margin-left: 70%;"> Add Data </a> &nbsp
                  </div>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Discount(%)</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
            @foreach($disc as $data)
              <tr>
                <td>{{$data->disc}}</td>
                <td>
                  <a href="{{url('dashboard/disc/edit', $data->id)}}"class="btn btn-outline-success btn-sm"> Edit </a>
                  <a href="{{url('dashboard/disc/delete', $data->id)}}" class="btn btn-outline-danger btn-sm"> Delete </a>
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
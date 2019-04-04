@extends('admin.layouts.header')
@section('admin')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Currently</strong>
                    <div class="row">
                    <a href="{{url('dashboard/curr/create')}}" class="btn btn-outline-primary btn-sm" style="margin-left: 70%;"> Add Data </a> &nbsp
                  </div>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Curr</th>
                <th>Action</th>                
              </tr>
            </thead>
            <tbody>
            @foreach($curr as $data)
              <tr>
                <td>{{$data->curr}}</td>
                <td>                  <a href="{{url('dashboard/curr/edit', $data->id)}}"class="btn btn-outline-success btn-sm"> Edit </a>
                  <a href="{{url('dashboard/curr/delete', $data->id)}}" class="btn btn-outline-danger btn-sm"> Delete </a>
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
@extends('layouts.basic')
@section('ideassection')

            <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">CRUD</h3>
                </div>
                <div class="panel-body">

<table class="table table-bordered">
  <tr>
    <th with="80px"> Nr</th>
    <th > Title</th>
    <th > Body </th>
    <th with="140px" class="text-center"> 

    <a href="{{route('ideas.create')}}" class="btn btn-success btn-sm">
      <i class = "glyphicon glyphicon-plus"></i>
    </a>
    </th>
  </tr>
<?php $nr=1; ?>
{{-- @foreach ($posts as $x) --}}
@foreach ($posts as $key =>$value)
<tr>
  <td> {{$nr++}} </td>
  <td> {{$value->title}} </td>
  <td> {{$value->body}} </td>
  <td> 
   <a class="btn btn-info btn-sm" href="{{route('ideas.show',$value->id)}}">
      <i class="glyphicon glyphicon-th-large"></i></a>

    <a class="btn btn-primary btn-sm" href="{{route('ideas.edit',$value->id)}}">
      <i class="glyphicon glyphicon-pencil"></i></a>
   
    {{Form::open(['method' => 'DELETE','route' => ['ideas.destroy',$value->id,'style'=>'display: inline;']]) }}
        <button  style="display: inline;"  type="submit"   class="btn btn-danger btn-sm">
          <i  class="glyphicon glyphicon-minus">  </i></button>
    {{Form::close() }}
  </td>
  <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
</tr>
@endforeach
</table>





              </div>
            </div>

            <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Statistici</h3>
                </div>
                <div class="panel-body">
                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h4><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h4>
                      <h4>Users</h4>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h4><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h4>
                      <h4>Pages</h4>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h4><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h4>
                      <h4>Posts</h4>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h4><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12</h4>
                      <h4>Visitors</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>


@endsection
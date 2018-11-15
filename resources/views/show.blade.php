@extends('layouts.basic')
@section('postssection')



<div class="row">
	<div class="col-xs-6 ">
		<div class="pull-left">
			<h2> Postarea {{ $posts->id }} </h2>
		</div>
		<div class="pull-right">
			<a  class="btn btn-primary" href="{{route('ideas.index')}}">
				<i class="glyphicon glyphicon-arrow-left"></i>
			</a>
		</div>
</div>

	<div class="col-xs-6 ">
		<h3>	Title: 	{{ $posts->title }}	</h3> 
		 
	</div>

	<div class="col-xs-6 ">
		<h3>	Body: 	 {{ $posts->body }}	</h3> 
	</div>
</div>
@endsection
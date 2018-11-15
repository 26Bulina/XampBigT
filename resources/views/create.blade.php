@extends('layouts.basic')
@section('postssection')


 <p> CREATE PAGE</p>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">

	{{ Form::open(['route'=>'ideas.store','method'=>'POST']) }}
	@include ('pp.form_master')
	{{  Form::close()  }}
	</div>
</div>


@endsection
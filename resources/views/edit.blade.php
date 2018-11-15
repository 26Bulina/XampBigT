@extends('layouts.basic')
@section('postssection')


 <p> edit PAGE</p>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
	{{ Form::model($posts,['route'=>['ideas.update',$posts->id],'method'=>'PATCH']) }}
	@include ('pp.form_master')
	{{ Form::close() }}
	</div>
</div>


@endsection
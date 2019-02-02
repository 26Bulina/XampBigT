-- vreau sa testez sa vad daca aceasta modificare ramane in branch-ul defaul, care va fi b
acum este b2-a 



@extends('layouts.basic')
@section('echipamentesection')


 <p> adaugare echipament</p>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">

	{{ Form::open(['route'=>'echipamente.store','method'=>'POST']) }}
	@include ('pp.form_echipamente')
	{{  Form::close()  }}
	</div>
</div>


@endsection

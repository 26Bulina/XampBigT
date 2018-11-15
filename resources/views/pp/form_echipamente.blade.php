<div class="row">
	<div class="col-sm-3">
		{{ form::label('cod','Cod') }}
	</div>
	<div class="col-sm-9">
		<div class="form-group {{ $errors -> has('cod') ? 'has-error' : "" }}" >
			{{ Form::text('cod',NULL,['class'=>'form-control','id'=>'cod', 'placeholder'=>'Codul echipamentului...'])  }}
			{{ $errors->first('cod','<p class="help-block">:message</p>') }}
		</div>	
	</div>
</div>

<div class="row">
	<div class="col-sm-3">
		{{ form::label('identificator','Identificator') }}
	</div>
	<div class="col-sm-9">
		<div class="form-group {{ $errors -> has('identificator') ? 'has-error' : ""}} " >
			{{ Form::text('identificator',NULL,['class'=>'form-control','id'=>'identificator', 'placeholder'=>'mac address...'])  }}
			{{ $errors->first('identificator','<p class="help-block">:message</p>') }}
		</div>	
	</div>
</div>

<div class="form-group">
	{{Form::button(isset($model)? 'Update':'save',['class'=>'btn btn-success','type'=>'submit']) }}
</div>
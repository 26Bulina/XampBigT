<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Angajare Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_angajare', 'Data Angajare:') !!}
    {!! Form::date('data_angajare', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnp', 'Cnp:') !!}
    {!! Form::text('cnp', null, ['class' => 'form-control']) !!}
</div>

<!-- angjt Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('angajats_id', 'angjt Id:') !!}
    {!! Form::text('angajats_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('employees.index') !!}" class="btn btn-default">Cancel</a>
</div>

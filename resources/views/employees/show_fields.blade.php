<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $employee->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $employee->name !!}</p>
</div>

<!-- Data Angajare Field -->
<div class="form-group">
    {!! Form::label('data_angajare', 'Data Angajare:') !!}
    <p>{!! $employee->data_angajare !!}</p>
</div>

<!-- Cnp Field -->
<div class="form-group">
    {!! Form::label('cnp', 'Cnp:') !!}
    <p>{!! $employee->cnp !!}</p>
</div>

<!-- angjt Id Field -->
<div class="form-group">
    {!! Form::label('angajats_id', 'angajat Id:') !!}
    <p>{!! $employee->angajats_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $employee->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $employee->updated_at !!}</p>
</div>


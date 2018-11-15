@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Glass
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($glass, ['route' => ['glasses.update', $glass->id], 'method' => 'patch']) !!}

                        @include('glasses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
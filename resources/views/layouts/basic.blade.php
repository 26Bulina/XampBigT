<!DOCTYPE html>
<html lang="en">
<head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>

<base href="{{ URL::asset('/') }}" target="_self">  
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/bootstrap-3.3.7.min.css') }}">


<link rel="stylesheet" href="{{ url('css/maxcdn-3.3.7-bootstrap.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script> 
<script src="{{ url('js/jquery-ui.js') }}"></script> 
<script src="{{ url('js/bootstrap.js') }}"></script> 
<script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
 
</head>

<body> 
@include('layouts.onav')
@include('layouts.logo')
<section id="main">
    <div class="container">
        @include('layouts.vnav')
        @include('layouts.menu')
        @yield('indexsection')
        @yield('userssection')
        @yield('postssection')
        @yield('functiisection')
        @yield('ideassection')
        @yield('qasection')
        @yield('echipamentesection')

    </div>
</section>






        <div class="col-xs-12">
                <div class="container">
                    <footer class="panel-footer" >
                         <p>Copyright BigT, &copy; 2018</p>
                    </footer>
                 </div>
        </div>




{{-- //// pt butoane word  --}}
    <script>
    CKEDITOR.replace( 'editor1' );
    </script>
 {{-- //  --}}


    <script src="{{ url('js/popper.min.js') }}"></script> 
    <script src="{{ url('js/bootstrap.min.js') }}"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
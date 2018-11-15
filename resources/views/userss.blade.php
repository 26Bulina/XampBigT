

@extends('layouts.basic')
@section('userssection')

<div class="col-md-9">
  <div class="panel panel-default">


    <div class="panel-body">
      <form action="{{ url('/inregistrare') }} " method="POST">
        {{ csrf_field() }}

        <legend> Adauga utilizatori </legend>

        @if(count($errors)>0)
          @foreach($errors->all() as $error)
          <div class="alert alert-danger">{{$error}}</div>
          @endforeach
        @endif

        @if(session ('response'))
        <div class="col-sm-8 alert alert-success">
          {{session('response')}}
        </div>s
        @endif

        <div class="col-md-6 col-md-offset-1">
          <input id="email" type="text" name="username" placeholder="Username"
          value="" required="required" autofocus="autofocus" class="form-control">
        </div>
        <div class="col-md-6 col-md-offset-1">
          <input id="datepicker" type="text" name="hire_date" placeholder="Data angajarii"
          value="" required="required" autofocus="autofocus" class="form-control">
        </div>
        <div class="col-md-6 col-md-offset-1">
          <input id="email" type="text" name="email" placeholder="Email"
          value="" required="required" autofocus="autofocus" class="form-control">
        </div>
        <div class="col-md-6 col-md-offset-1">
          <input id="email" type="text" name="password" placeholder="Parola"
          value="" required="required" autofocus="autofocus" class="form-control">
          {{-- type=password  --}}
        </div>
        <div class="col-md-6 col-md-offset-2">
          <input type="submit" name="Submit" class="btn btn-primary"> 
        </div>
      </form>
    </div>




  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-12">
          <input class="form-control" type="text" placeholder="Filter Users...">
        </div>
      </div>
      <br>
      <table class="table table-striped table-hover">
        <?php
         $conectare=mysqli_connect('localhost','root','','bigt'); 
        $sql = "select * from angajats";
        $result = mysqli_query($conectare, $sql);
        echo '
        <tr>
          <th>Utilizator</th>
          <th>Email</th>
          <th>Data angajare</th>
          <th></th>
        </tr>';
        while ( $row = $result->fetch_assoc())
        {
        echo '<tr> <td>'.$row{'username'}.'</td>';
        echo      '<td>'.$row{'email'}.'</td>';
        echo '<td> ' .$row{'hire_date'}.'</td>';
        echo      '<td><a class="btn btn-default" href="users">Edit</a>
                  <a class="btn btn-danger" href="users">Delete</a></td></tr>';
        }?>

    </table>
  </div>
</div>


    </div>
  </div>


</div>
@endsection
@extends('layouts.basic')

@section('functiisection')



            <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Functii</h3>
                </div>

                <div class="panel-body">
                 <div class=row>
                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h4> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 20
                        </h4>
                      <h4>Lista functii</h4>
                    </div>

                  </div>
                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h4><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h4>
                      <h4>Administrare functii</h4>
                    </div>
                  </div>
                </div>
                <div class=row>
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Lista functii</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Administrare functii</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                  </div>
                </div>
                </div>
              </div>


@endsection
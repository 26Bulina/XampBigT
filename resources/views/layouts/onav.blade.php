     



<div id="app">
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">

                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>


                    <div id="navbar" class="collapse navbar-collapse navbar-left">
                        <ul class="nav navbar-nav nav-tabs">
                                <li class="active"><a href="#">bIgT</a></li>
                                <li><a href="users">Utilizatori</a></li>
                                <li><a href="qa">Questions</a></li>
                        </ul>
                    </div>
                



    </div>
    </nav>
    @yield('loginsection')
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
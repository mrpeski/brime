<!DOCTYPE html>
<html>
<head>
    <title>Discovery Trip Net</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/libs/magnific_popup/magnific-popup.css')}}">

</head>
<body>
<header class="header">
    <div class="container">
        <a href="/"><span class="_lg">DiscoveryTrip</span></a>
        <div>YOUR ONE STOP TRAVEL SHOP</div>
    </div>
</header>
    <nav class="navbar navbar-default">
      <div class="container">
          <!-- <a class="navbar-brand" href="#"> -->
            <ul class="nav navbar-nav">
                <li class=""><a href="{{ url('fly')}}">Book Flight <span class="sr-only">(current)</span></a></li>
                <li><a href="{{ url('find-hotels')}}">Book Hotels</a></li>    
                <li><a href="#">Browse Packages</a></li>
                <li><a href="{{ route('front_visa')}}" class="ajax">Visa Assitance</a></li>
                <li><a href="{{ route('front_insurance')}}">Travel Insurance</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if( Auth::user())
                <li class="dropdown">
                    <a href="{{ url('/login') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Signed in as: {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="http://localhost:8000/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="yn2xBtL8wnl9B5H19JUZb1MUiar6BJaqZExsUIdV">
                                        </form>
                                    </li>
                                </ul>
                            </li>
                @else
                <li><a href="{{ url('/login')}}">Member Login</a></li>
                @endif
            </ul>         
      </div>
    </nav>
<!DOCTYPE html>
<html>
<head>
    <title>Discovery Trip Net</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
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
                <li><a href="{{ route('front_visa')}}">Visa Assitance</a></li>
                <li><a href="{{ route('front_insurance')}}">Travel Insurance</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="pages/login.html">Member Login</a>
                </li>
            </ul>         
      </div>
    </nav>
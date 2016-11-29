<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>


        <title>Discovery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
        <style>
        	body { font-family: Raleway, sans-serif; margin: 0 auto; }
        	input { width: 99%; height: 60px; border: 1px 1px 0 solid #d1d1d1; font-size: 1.5em; margin-bottom: 1em; padding-left: 10px; }
        	label { border-bottom: 1px solid #ccc; }

            .primary-link {  background: #cb6280; padding: 10px; margin: 10px; color: white; display: inline-block;}

            .primary-link:hover { color: white; }

            .nav { width: 300px; background: #333; color: #fefefe; height: 100%; position: fixed; float: left;  margin-right: 10px; }
            .nav li { list-style: none; width: 100%; }
            .nav__items { padding: 30px 20px; color: #fefefe; text-decoration: none; line-height: 1.5em; display: block;}
            .nav__items:hover { background: #222; }
            .content {float: right; width:calc( 100vw - 320px ); margin: 10px 0;}
            .inner { padding-right: 10px; }
            .logo { background: #ccc; margin: auto; padding: 20px; }
            :focus { outline: none; }
        </style>
    </head>
    <body>
        <nav class="nav">
            <div class="logo"><img src="{{asset('logo.png')}}" alt=""></div>
            <li><a href="{{ route('staff_control') }}" class="nav__items">Manage Staff</a></li>
            <li><a href="{{ route('users_control') }}" class="nav__items">Manage Users</a></li>
            <li><a href="{{ route('page_control') }}" class="nav__items">Manage Pages</a></li>
            <li><a href="{{ route('package_control') }}" class="nav__items">Manage Packages</a></li>
        </nav>
        <div class="content">
            <div class="inner">
			     @yield('content')
            </div>
        </div>
			@yield('scripts')
			@yield('footer')
    </body>
</html>
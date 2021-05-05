<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{{ asset('images/favicons.ico') }}}">
    <title>Booking - System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/front/jquery.skeduler.css') }}" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-3.1.0.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/front/jquery.skeduler.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/front/skeduler-main.js') }}"></script>
</head>

<body>

        <header>
            <div class="container-fluid">
                <div class="logo-txt">
                    <a href="/">Booking System</a>
                </div>

            </div>
        </header>

        <!--nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav-->

        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-2 sidenav">
                    <p><a href="#">Link</a></p>
                    <p><a href="#">Link</a></p>
                    <p><a href="#">Link</a></p>
                </div>
                <div class="col-sm-10 text-left">
                    <!-- Banner Starts Here -->
                    @yield('content')
                </div>
            </div>
        </div>


        



        <!-- Footer Starts Here -->

        <footer class="container-fluid text-center">
            <p>Copyright © 2019 Booking System. All Rights Reserved.</p>
        </footer>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{{ asset('images/favicons.ico') }}}">
    <title>Booking - System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/front/jquery.calendar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/front/dcalendar.picker.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/front/custom.css') }}" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/front/jquery.calendar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/front/dcalendar.picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/front/calendar-main.js') }}"></script>
</head>

<body>
<input type="hidden" name="basepath" id="basepath" value="{!! BASE_PATH !!}">

        <header>
            <div class="container-fluid">
                <div class="logo-txt">
                    <a href="{{ URL::to('/') }}"><img src="{{ asset('images/clogo.jpg') }}" style="width: 5%;" alt=""></a>
                </div>
                <br />
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
                <div class="col-sm-3">
                    <table id="calendar-demo" class="calendar"></table>
                    <br />

                    <div class="user-filter">
                        <h3>Filter</h3>
                        @if(count(App\Hallar::all()) > 0)
                            @foreach(App\Hallar::all() as $v)
                                <p>
                                    <input type="checkbox" name="filterName" id="filterId{!! $v->userID !!}" value="{!! $v->userID !!}" onclick="javascript:callcal();"> {!! $v->name !!}
                                </p>
                            @endforeach
                        @else
                            <p>No filter set yet!!</p>
                        @endif
                    </div>
                </div>
                <div class="col-sm-9 text-left">
                    <!-- Banner Starts Here -->
                    @yield('content')
                </div>
            </div>
        </div>




        <!-- Footer Starts Here -->

        <footer class="container-fluid text-center">
            <p>Copyright © 2021 Booking System. All Rights Reserved.</p>
        </footer>

</body>

</html>
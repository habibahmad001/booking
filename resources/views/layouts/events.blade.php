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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
    <link rel="stylesheet" href="{{ asset('css/front/vertical-timeline.css') }}">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/front/jquery.calendar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/front/dcalendar.picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/front/vertical-timeline.js') }}"></script>
    <script src="{{ asset('js/front/calendar-main.js') }}"></script>
</head>

<body>
<input type="hidden" name="basepath" id="basepath" value="{!! BASE_PATH !!}">

        <header>
            <div class="container-fluid">
                <div class="container-fluid text-center">
                    <div class="row content">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="logo-txt">
                                <a href="{{ URL::to('/') }}">
                                    <img src="{{ asset('images/clogo.jpg') }}" style="width: 25%;float: left;margin-top: 5%;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <input type="button" class="btn btn-light" value="<<" style=" float: left; vertical-align: bottom; margin: 4% 0;" onclick="javascript: if($('.leftpan').is(':hidden')) { $('.leftpan').show(300); $('.rightpan').attr('class', 'col-sm-9 text-left rightpan'); $(this).val('<<'); } else { $('.leftpan').hide(300); $('.rightpan').attr('class', 'col-sm-12 text-left rightpan'); $(this).val('>>') }" />
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @include( 'blocks.front-main-nav' )

        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-3 leftpan">
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
                <div class="col-sm-9 text-left rightpan showfull">
                    <!-- Banner Starts Here -->
                    @yield('content')
                </div>
            </div>

            <div class="row content">
                <div class="col-sm-12 showmobile">
                    <!-- Banner Starts Here -->
                    @include("frontend.mobileevents");
                </div>
            </div>
        </div>




        <!-- Footer Starts Here -->

        <footer class="container-fluid text-center">
            <br /><br /><br />
            <p>Copyright ?? 2021 Booking System. All Rights Reserved.</p>
            <br /><br /><br />
        </footer>

</body>

</html>
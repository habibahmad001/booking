<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{{ asset('images/favicons.ico') }}}">
    <title>{!! env("APP_NAME") !!} - Reset Password</title>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrapLive.min.css') }}">
    <link href="{{ asset('css/style-new.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/front.js') }}" type="text/javascript"></script>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="logo-txt">
                <a href="{!! BASE_PATH !!}">{!! env("APP_NAME") !!}</a>
            </div>

        </div>
    </header>

    @include( 'blocks.front-main-nav' )

    <div class="wrapper">

        @yield('content')

    </div>


    <footer>
        <p class="copyrights">Copyright © {!! date("Y") !!} {!! env("APP_NAME") !!}. All Rights Reserved.</p>
    </footer>

    <script>
        // $('document').ready(function() {
        //     $("a").click(function(event) {
        //         event.preventDefault();
        //     });
        // });
    </script>
</body>

</html>
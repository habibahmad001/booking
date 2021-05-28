<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{{ asset('images/favicons.ico') }}}">
    <title>{!! env( 'APP_NAME' ) !!}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/front/jquery.calendar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/front/dcalendar.picker.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/front/custom.css') }}" type="text/css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
    <link rel="stylesheet" href="{{ asset('css/front/vertical-timeline.css') }}">
    @include( 'blocks.home.css' )

</head>

<body>
<input type="hidden" name="basepath" id="basepath" value="{!! BASE_PATH !!}">
        @include( 'blocks.home.header' )

        @yield( 'content' )

        @include( 'blocks.home.footer' )

@include( 'blocks.home.js' )
</body>

</html>
@extends('layouts.events')
<style type="text/css">
    .evecalendar{
        font-family: 'Roboto';
        font-size: 10px;
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        border: 1px solid #bbb;
        min-height: 1507px;
    }
</style>
@section('content')

    <div id="calcont" class="evecalendar">
        <div id="calendar" class="evecalendar"></div>
    </div>



@endsection

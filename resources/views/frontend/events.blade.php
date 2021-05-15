@extends('layouts.events')
<style type="text/css">
    #calendar{
        font-family: 'Roboto';
        font-size: 10px;
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        border: 1px solid #bbb;
        min-height: 1499px;
    }

    .evecalendar{
        font-family: 'Roboto';
        font-size: 10px;
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        border: 1px solid #bbb;
    }
</style>
@section('content')

    <div id="calcont" class="evecalendar">
        <div id="calendar" class="evecalendar"></div>
    </div>

@endsection

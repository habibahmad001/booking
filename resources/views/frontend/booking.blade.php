@extends('layouts.booking')

<style>
    .skeduler-headers > div {
        flex: 0 0 10% !important;
    }
    .skeduler-main-body > div > div.skeduler-cell {
        width: 151px !important;
    }
    .skeduler-task-placeholder > div {
        width: 100% !important;
    }
    @media (max-width: 1376px) {
        .skeduler-main-body > div > div.skeduler-cell {
            width: 103.2px !important;
        }
    }
</style>

@section('content')

   <div id="skeduler-container"><script type="text/javascript">generate();</script></div>

@endsection

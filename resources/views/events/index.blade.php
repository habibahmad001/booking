@extends('layouts.app-' . collect(request()->segments())->first())
@section('content') 
@include('blocks.sub-header')
@include('blocks.left-menu-instructor')
@include('events.edit')
@include('events.create')

<link rel="stylesheet" href="{{ asset('css/zebra_datepicker.min.css')}}" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">

<style>
    span.Zebra_DatePicker_Icon_Wrapper {
        width: 100% !important;
    }
</style>
<!-- Edit form -->
<div class="center-content-area table-set">
    <div class="table-responsive">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <table class="table">
            <tbody class="table">
                <thead>
                    </tr>
                    <tr>
                        <th width="3%" class="edit-icon-container">&nbsp;</th>
                        <th width="2%" class="checkbox-container">
                            <input type="checkbox" name="all">
                        </th>
                        <th>Note</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Lag</th>
                        <th>Ledare</th>
                    </tr>
                </thead>
                @if(count($events)) @foreach ($events as $v)
                <tr>
                    <th class="edit-icon-container"><span class="edit-icon" data-id="{{ $v->id }}"><img src="{{URL::asset('/images/')}}/edit-icon.png" alt="" title=""></span></th>
                    <th class="checkbox-container">
                        <input type="checkbox" name="del_events[]" value="{{ $v->id }}" class="checkbox-selector">
                    </th>
                    <td>{{ $v->note }}</td>
                    <td>{{ $v->eventStartdate }}</td>
                    <td>{{ $v->eventStarttime }}</td>
                    <td>{{ $v->eventEndtime }}</td>
                    <td>{{ App\Lag::find($v->lag)->name }}</td>
                    <td>{{ App\Ledare::find($v->ledare)->name }}</td>
                </tr>
                @endforeach @else
                <tr>
                    <th colspan="7" class="error">No results found</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="pagination-container">
        <div class="number-container">
            Total: <span>{{ $events->total() }}</span>
        </div>
        <nav aria-label="Page navigation">
            @include('pagination.default', ['paginator' => $events])
        </nav>
    </div>
</div>
@include('../blocks/delete-form', ['model' => 'events'])

@endsection 

@section('js_libraries')
<script type="text/javascript" src="{{ asset('js/events.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/zebra_pin@2.0.0/dist/zebra_pin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.js"></script>
<script src="{{ asset('js/zebra_datepicker.min.js')}}"></script>
@endsection
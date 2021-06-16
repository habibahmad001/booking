@extends('layouts.app-admin')
@section('content') 
@include('blocks.sub-header')
@include('blocks.left-menu-admin')
@include('lag.edit')
@include('lag.create')

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
                        <th>Name</th>
                        <th>Anpassade Priser</th>
                        <th>Lagiedare</th>
                        <th>Tillgangliga</th>
                        <th>Redigera lag</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @if(count($lag)) @foreach ($lag as $v)
                <tr>
                    <th class="edit-icon-container"><span class="edit-icon" data-id="{{ $v->id }}"><img src="{{URL::asset('/images/')}}/edit-icon.png" alt="" title=""></span></th>
                    <th class="checkbox-container">
                        <input type="checkbox" name="del_lag[]" value="{{ $v->id }}" class="checkbox-selector">
                    </th>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->area }}</td>
                    <td><a href="javascript:void(0);">{{ $v->legs }}</a></td>
                    <td>@if($v->apply_type == 'Visa') <a href='javascript:void(0);' onclick="javascript: $('#modelimg').attr('src', '{!! URL::asset('/uploads/lagvisafile') . '/' . $v->visafile !!}'); $('#exampleModal').modal('toggle');">{{ $v->apply_type }}</a> @else {{ $v->apply_type }} @endif</td>
                    <td><a href="javascript:void(0);">{{ $v->register_type }}</a></td>
                    <td>
                        <label class="switch">
                            <input type="checkbox" name="switchers" id="switchers" data-id="{!! $v->id !!}" {!! ($v->status == "yes") ? 'checked' : '' !!}>
                            <span class="slider round"></span>
                        </label>
                    </td>
                </tr>
                @endforeach @else
                <tr>
                    <th colspan="8" class="error">No results found</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="pagination-container">
        <div class="number-container">
            Total: <span>{{ $lag->total() }}</span>
        </div>
        <nav aria-label="Page navigation">
            @include('pagination.default', ['paginator' => $lag])
        </nav>
    </div>
</div>
@include('../blocks/delete-form', ['model' => 'lag'])

@endsection


@section('popups')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header modal-img">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <img src="{!! BASE_PATH . 'uploads/lagvisafile/1619819783.jpg' !!}" id="modelimg" width="100%" />
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_libraries')
<script type="text/javascript" src="{{ asset('js/lag.js')}}"></script>
@endsection
@extends('layouts.app-admin')
@section('content') 
@include('blocks.sub-header')
@include('blocks.left-menu-admin')
@include('ledare.edit')
@include('ledare.create')

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
                        <th>Kontaktuppgifter</th>
                        <th>Lagbehorigheter</th>
                        <th>Tillgangllga hallar</th>
                        <th>Redigera ledare</th>
                        <th>Action</th>
                        <!--th>Anpassade Priser</th>
                        <th>Lagiedare</th>
                        <th>Tillgangliga</th>
                        <th>Redigera lag</th-->
                    </tr>
                </thead>
                @if(count($ledare)) @foreach ($ledare as $v)
                <tr>
                    <th class="edit-icon-container"><span class="edit-icon" data-id="{{ $v->id }}"><img src="{{URL::asset('/images/')}}/edit-icon.png" alt="" title=""></span></th>
                    <th class="checkbox-container">
                        <input type="checkbox" name="del_ledare[]" value="{{ $v->id }}" class="checkbox-selector">
                    </th>
                    <td>{{ $v->name }}</td>
                    <td>@if($v->Kont_type == 'Visa') <a href='javascript:void(0);' onclick="javascript: $('#modelimg').attr('src', '{!! URL::asset('/uploads/ledare') . '/' . $v->kontfile !!}'); $('#exampleModal').modal('toggle');">{{ $v->Kont_type }}</a> @else {{ $v->Kont_type }} @endif</td>
                    <td>@if($v->lagb_type == 'Visa') <a href='javascript:void(0);' onclick="javascript: $('#modelimg').attr('src', '{!! URL::asset('/uploads/lagbd') . '/' . $v->lagbdfile !!}'); $('#exampleModal').modal('toggle');">{{ $v->lagb_type  }}</a> @else {{ $v->lagb_type }} @endif</td>
                    <td>@if($v->tillg_type == 'Visa') <a href='javascript:void(0);' onclick="javascript: $('#modelimg').attr('src', '{!! URL::asset('/uploads/tillg') . '/' . $v->tillgfile !!}'); $('#exampleModal').modal('toggle');">{{ $v->tillg_type }}</a> @else {{ $v->tillg_type }} @endif</td>
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
            Total: <span>{{ $ledare->total() }}</span>
        </div>
        <nav aria-label="Page navigation">
            @include('pagination.default', ['paginator' => $ledare])
        </nav>
    </div>
</div>
@include('../blocks/delete-form', ['model' => 'ledare'])

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
                    <img src="{!! BASE_PATH . 'uploads/ledare/1619734038.jpg' !!}" id="modelimg" width="100%" />
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_libraries')
<script type="text/javascript" src="{{ asset('js/ledare.js')}}"></script>
@endsection
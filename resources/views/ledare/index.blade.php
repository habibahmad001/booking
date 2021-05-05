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
                    <td>@if($v->Kont_type == 'Visa') <a href='javascript:void(0);'>{{ $v->Kont_type }}</a> @else {{ $v->Kont_type }} @endif</td>
                    <td>@if($v->lagb_type == 'Visa') <a href='javascript:void(0);'>{{ $v->lagb_type  }}</a> @else {{ $v->lagb_type }} @endif</td>
                    <td>@if($v->tillg_type == 'Visa') <a href='javascript:void(0);'>{{ $v->tillg_type }}</a> @else {{ $v->tillg_type }} @endif</td>
                    <td><a href="javascript:void(0);">{{ $v->register_type }}</a></td>
                    <td>Yes / No</td>
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

@section('js_libraries')
<script type="text/javascript" src="{{ asset('js/ledare.js')}}"></script>
@endsection
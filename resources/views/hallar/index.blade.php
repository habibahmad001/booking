@extends('layouts.app-admin')
@section('content') 
@include('blocks.sub-header')
@include('blocks.left-menu-admin')
@include('hallar.edit')
@include('hallar.create')

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
                        <th>Behoriga ledare</th>
                        <th>Pris</th>
                        <th>Redigera hall</th>
                        <th>Action</th>
                        <!--th>Anpassade Priser</th>
                        <th>Lagiedare</th>
                        <th>Tillgangliga</th>
                        <th>Redigera lag</th-->
                    </tr>
                </thead>
                @if(count($Hallar)) @foreach ($Hallar as $v)
                <tr>
                    <th class="edit-icon-container"><span class="edit-icon" data-id="{{ $v->id }}"><img src="{{URL::asset('/images/')}}/edit-icon.png" alt="" title=""></span></th>
                    <th class="checkbox-container">
                        <input type="checkbox" name="del_hallar[]" value="{{ $v->id }}" class="checkbox-selector">
                    </th>
                    <td>{{ $v->name }}</td>
                    <td>@if($v->apply_type == 'Visa') <a href='javascript:void(0);'>{{ $v->apply_type }}</a> @else {{ $v->apply_type }} @endif</td>
                    <td>{{ $v->price }}</td>
                    <td><a href="javascript:void(0);">{{ $v->register_type }}</a></td>
                    <td>Yes / No</td>
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
            Total: <span>{{ $Hallar->total() }}</span>
        </div>
        <nav aria-label="Page navigation">
            @include('pagination.default', ['paginator' => $Hallar])
        </nav>
    </div>
</div>
@include('../blocks/delete-form', ['model' => 'hallar'])

@endsection 

@section('js_libraries')
<script type="text/javascript" src="{{ asset('js/hallar.js')}}"></script>
@endsection
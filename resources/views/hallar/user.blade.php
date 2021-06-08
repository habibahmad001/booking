@extends('layouts.app-admin')
@section('content') 
@include('blocks.sub-header')
@include('blocks.left-menu-admin')

<!-- Edit form -->
<div class="center-content-area table-set">
    <div class="table-responsive text-right">

        <table width="80%" class="usertb">
            <tr>
                <td class="text-center"><b>First Name:</b></td>
                <td class="text-left">{!! $User->first_name !!}</td>
            </tr>
            <tr>
                <td class="text-center"><b>Last Name:</b></td>
                <td class="text-left">{!! $User->last_name !!}</td>
            </tr>
            <tr>
                <td class="text-center"><b>User Name:</b></td>
                <td class="text-left">{!! $User->username !!}</td>
            </tr>
            <tr>
                <td class="text-center"><b>Email:</b></td>
                <td class="text-left">{!! $User->email !!}</td>
            </tr>
            <tr>
                <td class="text-center"><b>Phone:</b></td>
                <td class="text-left">{!! $User->phone !!}</td>
            </tr>
        </table>
    </div>


</div>

@endsection
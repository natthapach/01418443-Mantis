@extends('layouts.master')

@section("page-title")

Dashboard

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Dashboard </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        @if( Auth::check() )
            {{ Auth::user() }}
        @else
            You are not login
        @endif    
        </div>
    </div>
</div>
    
@endsection


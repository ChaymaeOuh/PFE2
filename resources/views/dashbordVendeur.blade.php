@extends('layouts.layout')
@section('title')
    IO STORE
@endsection
@section('style')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

<div>
    @section('header')
        @include('layouts.pages.header')
        @include('layouts.pages.script2')

        <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>
    @endsection
</div>

<div>
    @section('content')

    @endsection
</div>

<div class="dashbord">
    <div class="menu">
        
    </div>
    <div class="tablebord"></div>
</div>


<div>
    @section('footer')
        @include('layouts.pages.footer')
    @endsection
</div>


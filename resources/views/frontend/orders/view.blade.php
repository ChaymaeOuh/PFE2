@extends('layouts.layout')

@section('title')
Ma Commande
@endsection

@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style>
    .usertab {
        display: none;
        position: absolute;
        width: 200px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 200;
        float: right;
        top: 66px;
        left: 80%;
        border-radius: 20px;
        background-color: var(--color5);
        clip-path: polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%);
        transform-origin: top right;
        transition: all .4s ease-in-out;
    }

    .usertab button {
        color: var(--color2);
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        border-bottom: 1px;
        border-color: var(--color2);
        border-radius: 20px;
        width: 90%;
        margin: 5px;
        font-size: 18px;
        text-align: center;
        background-color: var(--color3);
        cursor: pointer;

    }

    .usertab a {
        text-decoration: none;
    }

    .show {
        clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
    }

    .usertabhome {
        display: none;
    }
</style>
@endsection


<div>
    @section('header')
    @include('layouts.pages.header')
    <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/funlogin.js') }}"></script>
    @endsection
</div>

<div>
    @section('content')
    @include('layouts.pages.viewdetail')
    @endsection
</div>


<div>
    @section('footer')
    @include('layouts.pages.footer')
    @endsection
</div>
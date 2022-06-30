{{-- @extends('layouts.app') --}}
{{--
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.layout')
@section('title')
IO STORE
@endsection
@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<style>
    .usertabhome {
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

    .usertabhome button {
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
    .usertabhome a{
        text-decoration: none;
    }
    .show {
        display: block;
    }
</style>

@endsection

<div>
@section('header')
@include('layouts.pages.header')

<span id="usertabhome" class="usertabhome">
    <a ><button class="loginbtnhome">Profil</button></a>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button class="logout">Deconnexion</button></a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
    </form>
</span>


        <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/funlogin.js') }}"></script>
@endsection
</div>

<div>
    @section('content')
        @include('layouts.pages.slider')
        <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
        @include('layouts.pages.product-card')
    @endsection
</div>



<div>
    @section('footer')
        @include('layouts.pages.footer')
    @endsection
</div>













<div>
@section('footer')
@include('layouts.pages.footer')
@endsection
</div>

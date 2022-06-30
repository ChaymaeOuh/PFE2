@extends('layouts.layout')
@section('title')
    IO STORE
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
        .usertab a{
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
<div>
    <span id="usertab" class="usertab">
        <a href="{{ route('login') }}"><button class="loginbtn">Connexion</button></a>
        <a href="{{ route('register') }}"><button class="registerbtn">Inscription</button></a>
    </span>
</div>
<script>

const hello = () => {
    const button1 = document.querySelector(".userbtn");
    const signup = document.querySelector(".usertab");

    button1.addEventListener("click", () => {
        //animation
        signup.classList.toggle("show");
    });
}

hello();
</script>

        <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>

    @endsection



    @section('content')
        @include('layouts.pages.slider')
        <script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>


{{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div> --}}




        @include('layouts.pages.product-card')
    @endsection
</div>





<div>
    @section('footer')
        @include('layouts.pages.footer')
    @endsection
</div>

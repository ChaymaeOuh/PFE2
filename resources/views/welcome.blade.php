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
        @include('layouts.pages.script')

        <script type="text/javascript" src="{{ asset('js/header.js') }}"></script>

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


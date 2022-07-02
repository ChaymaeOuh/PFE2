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

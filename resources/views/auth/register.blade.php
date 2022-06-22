@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('authstyle')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection




@section('content')
    <div class="formulaire">

        <h1>{{ __('Inscription') }}</h1>


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="txt">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span></span>
                <label for="name">{{ __('Nom') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



            <div class="txt">

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
                <span></span>
                <label for="email">{{ __('Email') }}</label>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="txt">


                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                <span></span>
                <label for="password">{{ __('Mot de passe') }}</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="txt">



                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
                <span></span>
                <label for="password-confirm">{{ __('Confirmer le mot de passe') }}</label>
            </div>


            <button type="submit" class="submit">
                {{ __('Creer Compte') }}
            </button>


            @if (Route::has('login'))
                <div class="autre">
                    <a href="{{ route('login') }}">
                        {{ __('Connexion') }}
                    </a>
                </div>
            @endif
        </form>
    </div>
@endsection

@extends('layouts.app')
@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('authstyle')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<body>
    <div class="formulaire">
        <h1>Connexion</h1>
        <form method="post" action="{{route('login')}}">
            @csrf
            <div class="txt">
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <span></span>
                <label>Email</label>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="txt">
                <input type="password" name="password" required autocomplete="current-password">
                <span></span>
                <label>Mot de passe</label>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="remember">
                <div class="check">
                    <input class="check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="remembertxt" for="remember">
                        {{ __('Se souvenir de moi') }}
                    </label>
                </div>
            </div>
            <span></br></span>
            @if (Route::has('password.request'))
            <a class="pass" href="{{ route('password.request') }}">
                {{ __('Mot de passe oublie?') }}
            </a>
            @endif
            <button type="submit" class="submit">
                {{ __('Se Connecter') }}
            </button>
            @if (Route::has('register'))
            <div class="autre">
                <a href="{{ route('register') }}">
                    {{ __('Creer Compte') }}
                </a>
            </div>
            @endif
    </div>
    </div>
    </form>
    </div>
</body>
@endsection


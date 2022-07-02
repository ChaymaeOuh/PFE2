@extends('layouts.layout')
@section('title')
    IO STORE
@endsection
@section('style')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>

        .wish{
            width: 70%;
            height: 60vh;
            margin-top: 50px;
            border: 2px solid var(--color3);
            box-shadow:  0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }
        .wish h1{
            margin: 10px;
        }
        .list{
            display: flex;
            width: 95%;
            height: 50px;
            border: 2px solid var(--color3);
        }
        .photo{
            width: 20%;
            height: 99%;
            cursor: pointer;
        }
        .txt{
            width: 80%;
            height: 99%;
        }
        .txt h2{
            font-size: 20px;
            color: var(--color1);
        }
        .prix{
            font-size: 24px;
            color: var(--color2);
        }
        .buttons{
            width: 20%;
            height: 99%;
            justify-content: center;
        }
        .buttons button{
            width: 80%;
            height: 30%;
            color: var(--color1);
            background-color: var(--color3);
            border: 2px solid var(--color1);
        }




    </style>




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


    <div class="wish">
        <h1>Votre liste d'envies </h1>
        <div class="list">
            <div class="photo">
                <img src="{{asset('./imgs/1656533305_pc-portable-gamer-lenovo-gaming-3-15ach6-15-6.jpg')}}" alt="image">
            </div>
            <div class="txt">
                <h2>PC Portable Gamer - LENOVO Gaming 3 15ACH6 - 15,6"</h2>
                <label class="prix"> 7499.9 MAD</label>
            </div>
            <div class="buttons">
                <button class="acheter">Acheter</button>
                <button class="supprimer">Supprimer</button>
            </div>
        </div>
    </div>


    @endsection
</div>



<div>
    @section('footer')
        @include('layouts.pages.footer')
    @endsection
</div>

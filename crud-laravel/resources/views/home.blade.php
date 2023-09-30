@extends('master')

@section('content')


<header>
    <nav class="navbar">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{asset("assets/images/deadpool.png")}}
                ">
            </a>
        </div>
        <ul class="nav-links">
            <li><a href="services.html">Serviços</a></li>
            <li><a href="#">Portifólio</a></li>
            <li><a href="{{route('users.index')}}">Clientes</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="{{route('users.create')}}">Cadastre-se</a></li>
        </ul>
    </nav>
</header>

<div class="assunto">
    <h1 class="titulo">Meus Clientes</h1>
    <p class="descricao">Lorem Ipsum</p>
</div>

<main class="principal">
    <div class="card">
        <img src="{{asset("assets/images/hobie-brown.png")}}
        " alt="">
        <h2>Hobie Brown</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="icon">
            <span class="material-symbols-outlined">
                favorite
            </span>
            <span class="material-symbols-outlined">
                token
            </span><span class="material-symbols-outlined">
                face
            </span>
            <span class="material-symbols-outlined">
                rocket_launch
            </span>
        </div>
    </div>

    <div class="card">
        <img src="{{asset("assets/images/joker.png")}}
        " alt="">
        <h2>Arthur Fleck</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="icon">
            <span class="material-symbols-outlined">
                favorite
            </span>
            <span class="material-symbols-outlined">
                token
            </span><span class="material-symbols-outlined">
                face
            </span>
            <span class="material-symbols-outlined">
                rocket_launch
            </span>
        </div>
    </div>

    <div class="card">
        <img src="{{asset("assets/images/carl.png")}}
        " alt="">
        <h2>Carl Johnson</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="icon">
            <span class="material-symbols-outlined">
                favorite
            </span>
            <span class="material-symbols-outlined">
                token
            </span><span class="material-symbols-outlined">
                face
            </span>
            <span class="material-symbols-outlined">
                rocket_launch
            </span>
        </div>
    </div>

    <div class="card">
        <img src="{{asset("assets/images/homer.png")}}
        " alt="">
        <h2>Homer Simpson</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <div class="icon">
            <span class="material-symbols-outlined">
                favorite
            </span>
            <span class="material-symbols-outlined">
                token
            </span><span class="material-symbols-outlined">
                face
            </span>
            <span class="material-symbols-outlined">
                rocket_launch
            </span>
        </div>
    </div>
</main>

@endsection
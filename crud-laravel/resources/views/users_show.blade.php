@extends('master')

@section('content')

<header>
    <nav class="navbar">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{asset("assets/images/deadpool.png")}}">
            </a>
        </div>
    </nav>
</header>

<h2>Usuário:</h2>
<ul>    
    <li>Nome: {{$user->firstName}}</li>
    <li>Sobrenome: {{$user->lastName}}</li>
    <li>Data de Nascimento: {{$user->dateBirth}}</li>
    <li>Email: {{$user->email}}</li>
    <li>Senha: {{$user->password}}</li>
</ul>

<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Apagar</button>
</form>

@endsection
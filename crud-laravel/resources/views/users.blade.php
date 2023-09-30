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
</header>

<h2>Users</h2>

<ul>
    @foreach($users as $user)
    <li>Nome: {{$user->firstName}} {{$user->lastName}} |
        <a href="{{route('users.edit', ['user' => $user->id])}}">Editar</a> |
        <a href="{{route('users.show')}}/{{$user->id}}">Mostrar</a> |
        <a href="{{route('users.destroy')}}/{{$user->id}}">Deletar</a>
    </li>
    @endforeach
</ul>

@endsection
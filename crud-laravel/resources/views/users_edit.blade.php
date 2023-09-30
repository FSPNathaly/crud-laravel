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

<form action="{{route('users.update')}}/{{$user->id}}" method='post'>
    @csrf
    <input type="hidden" name="_method" value="put">
    <label for="nome">Nome:</label>
    <input type="text" id="firstName" name="firstName" value='{{$user->firstName}}' required><br><br>

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" id="lastName" name="lastName" value='{{$user->lastName}}' required><br><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="dateBirth" name="dateBirth" value='{{$user->dateBirth}}' required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value='{{$user->email}}' required><br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="password" name="password" value='{{$user->password}}' required><br><br>

    <input type="submit" value="Editar">
</form>

@endsection
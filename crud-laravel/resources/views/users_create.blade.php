@extends('master')

@section('content')

<h2>Cadastre-se</h2>

<form action="{{route('users.store')}}" method='post'>
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" id="firstName" name="firstName" required><br><br>

    <label for="sobrenome">Sobrenome:</label>
    <input type="text" id="lastName" name="lastName" required><br><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="dateBirth" name="dateBirth" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Enviar">
</form>

@endsection
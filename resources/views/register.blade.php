@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')

<h2>Регистрация</h2>

<form method="POST" action="/register">
    @csrf

    <label>Имя</label>
    <input type="text" name="name">

    <label>Email</label>
    <input type="email" name="email">

    <label>Пароль</label>
    <input type="password" name="password">

    <button type="submit">Зарегистрироваться</button>
</form>

@endsection
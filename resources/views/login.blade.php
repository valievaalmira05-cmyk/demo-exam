@extends('layouts.app')

@section('title', 'Авторизация')

@section('content')

<h2>Авторизация</h2>

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif

<form method="POST" action="/login">
    @csrf

    <label>Email</label>
    <input type="email" name="email">

    <label>Пароль</label>
    <input type="password" name="password">

    <button type="submit">Войти</button>
</form>

@endsection
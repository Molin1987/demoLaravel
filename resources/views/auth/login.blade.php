@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Вход</h1>
    <form action="{{ route('log') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="login">Логин</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
@endsection
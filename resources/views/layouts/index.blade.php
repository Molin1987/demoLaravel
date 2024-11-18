@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Регистрация</h1>
    <form action="{{ route('reg') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fullname">ФИО</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="email">Почта</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Логин</label>
            <input type="password" class="form-control" id="login" name="login" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
@endsection


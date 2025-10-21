@extends('layouts.app')

@section('content')

<!-- Уведомления об успешной регистрации -->
@if(session('success'))
    <div class="alert alert-info">
        {{ session('success') }}
    </div>
@endif

<!-- Ошибки валидации -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Reģistrēties!</h1>

<form method="POST" action="/register">
    @csrf

    <label for="name" class="form-label">Login</label><br>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"><br>

    <label for="password" class="form-label">Parole:</label><br>
    <input type="password" class="form-control" id="password" name="password"><br>

    <button type="submit" class="btn btn-outline-dark">Reģistrēties</button>
    <a href="/login" class="btn btn-info">Ienākt</a>
</form>

@endsection

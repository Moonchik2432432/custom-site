@extends('layouts.app')

@section('content')
    <h1>Ielogošanas logs</h1>

    <form method="POST" action="/login">
        @csrf

        <label for="name" class="form-label">Login</label><br>
        <input type="text" class="form-control" id="name" name="name"><br>

        <label for="password" class="form-label">Parole:</label><br>
        <input type="password" class="form-control" id="password" name="password"><br>

        <button type="submit" class="btn btn-outline-dark">Ieiet</button>
        <a href="{{ route('register') }}" class="btn btn-info">Reģistrēties</a>
    </form>
@endsection

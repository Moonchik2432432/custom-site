@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 400px;">

    <h2>Login</h2>

    {{-- Вывод сообщения pazinojumi --}}
    @if(session('pazinojumi'))
        <div class="alert alert-danger">
            {{ session('pazinojumi') }}
        </div>
    @endif

    {{-- Вывод ошибок валидации --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('loginp') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Lietotājvārds</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Parole</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Ielogoties</button>
    </form>
</div>
@endsection

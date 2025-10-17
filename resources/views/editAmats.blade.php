@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Rediģēt Amats</h1>

    @if($errors->any())
        @foreach ($errors->all() as $kluda)
            <div class="alert alert-danger">{{ $kluda }}</div>
        @endforeach
    @endif

    <form action="/data/updateAmats/{{ $amats->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nosaukums" class="form-label">Nosaukums</label>
            <input type="text" class="form-control" id="nosaukums" name="nosaukums" value="{{ $amats->nosaukums }}">
        </div>

        <button type="submit" class="btn btn-primary">Saglabāt</button>
        <a href="/data/allAmats" class="btn btn-secondary">Atcelt</a>
    </form>
</div>
@endsection
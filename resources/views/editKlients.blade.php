@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Rediģēt Klients</h1>

    @if($errors->any())
        @foreach ($errors->all() as $kluda)
            <div class="alert alert-danger">{{ $kluda }}</div>
        @endforeach
    @endif

    <form action="/data/updateKlients/{{ $klients->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Uznenuma_nosaukums" class="form-label">Uznenuma nosaukums</label>
            <input type="text" class="form-control" id="Uznenuma_nosaukums" name="Uznenuma_nosaukums" value="{{ $klients->Uznenuma_nosaukums }}">
        </div>

        <div class="mb-3">
            <label for="Adrese" class="form-label">Adrese</label>
            <input type="text" class="form-control" id="Adrese" name="Adrese" value="{{ $klients->Adrese }}">
        </div>

        <div class="mb-3">
            <label for="Talrunis" class="form-label">Talrunis</label>
            <input type="text" class="form-control" id="Talrunis" name="Talrunis" value="{{ $klients->Talrunis }}">
        </div>

        <button type="submit" class="btn btn-primary">Saglabāt</button>
        <a href="/data/allKlients" class="btn btn-secondary">Atcelt</a>
    </form>
</div>
@endsection
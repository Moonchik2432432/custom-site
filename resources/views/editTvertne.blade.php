@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Rediģēt Tvertne</h1>

    @if($errors->any())
        @foreach ($errors->all() as $kluda)
            <div class="alert alert-danger">{{ $kluda }}</div>
        @endforeach
    @endif

    <form action="/data/updateTvertne/{{ $tvertne->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="Nosaukums" class="form-label">Nosaukums</label>
            <input type="text" class="form-control" id="Nosaukums" name="Nosaukums" value="{{ $tvertne->Nosaukums }}">
        </div>

        <div class="mb-3">
            <label for="UdensApjoms_L">UdensApjoms(L)</label>
            <input type="text" class="form-control" name="UdensApjoms_L" value="{{ $tvertne->UdensApjoms_L }}">
        </div>

        <button type="submit" class="btn btn-primary">Saglabāt</button>
        <a href="/data/allTvertne" class="btn btn-secondary">Atcelt</a>
    </form>
</div>
@endsection
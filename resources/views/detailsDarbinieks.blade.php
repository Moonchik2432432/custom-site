@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h2>Informācija par amatu</h2>

    <div class="card">
        <div class="card-body">
            @foreach($darbinieks->toArray() as $key => $value)
                <p><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</p>
            @endforeach
        </div>
    </div>

    <a href="/data/allDarbinieks" class="btn btn-secondary mt-3">Atpakaļ</a>
</div>

@endsection

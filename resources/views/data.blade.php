@extends('layouts.app')

@section('content')

<div class="container my-4">
    <h1 class="mb-3">DATU BĀZE</h1>
    <p class="lead mb-4">
        Šī sadaļa satur svarīgus datus par mūsu ūdens projektā iesaistītajām vienībām. Šeit varat pārskatīt informāciju par tvertnēm, amata veidiem, klientiem un darbiniekiem.
    </p>

    <div class="list-group mb-4">
        <a href="{{ url('/data/allTvertne') }}" class="list-group-item list-group-item-action">Tvertne</a>
        <a href="{{ url('/data/allAmats') }}" class="list-group-item list-group-item-action">Amats</a>
        <a href="{{ url('/data/allKlients') }}" class="list-group-item list-group-item-action">Klients</a>
        <a href="{{ url('/data/allDarbinieks') }}" class="list-group-item list-group-item-action">Darbinieks</a>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
                 alt="Ūdens tvertne" class="img-fluid rounded shadow-sm">
            <h5 class="mt-2">Ūdens tvertne</h5>
            <p>Tvertne, kurā tiek glabāts tīrs un svaigs ūdens mūsu projektam.</p>
        </div>
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1549924231-f129b911e442?auto=format&fit=crop&w=600&q=80"
                 alt="Darbinieks darbā" class="img-fluid rounded shadow-sm">
            <h5 class="mt-2">Darbinieks darbā</h5>
            <p>Mūsu darbinieki rūpējas par ūdens kvalitāti un uztur sistēmu darbībā.</p>
        </div>
    </div>
</div>

@endsection

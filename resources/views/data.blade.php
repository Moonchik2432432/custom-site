@extends('layouts.app')

@section('content')

<div>
    <h1>DATU BAZE</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, saepe, molestiae odit vero earum commodi architecto necessitatibus aspernatur nisi, maiores iusto quisquam totam deserunt. Ut rem hic cupiditate? Enim, voluptatibus!</p>
    <li><a href="{{ url('/data/allTvertne') }}" class="nav-link px-2 link-dark">Tvertne</a></li>
    <li><a href="{{ url('/data/allAmats') }}" class="nav-link px-2 link-dark">Amats</a></li>
    <li><a href="{{ url('/data/allKlients') }}" class="nav-link px-2 link-dark">Klients</a></li>
    <li><a href="{{ url('/data/allDarbinieks') }}" class="nav-link px-2 link-dark">Darbinieks</a></li>
</div>

@endsection

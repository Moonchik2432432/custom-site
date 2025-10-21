@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1 class="mb-3">Sākumlapa</h1>
    <p class="lead mb-4">
        Ūdens ir dzīvības pamats uz Zemes. Tas ir būtisks cilvēka veselībai, dabas ekosistēmām un ikdienas dzīvei. Mūsu mērķis ir nodrošināt tīru un drošu ūdeni visiem.
    </p>

    <div class="row g-4">
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
                 alt="Dabīgs kalnu avots" class="img-fluid rounded shadow-sm">
            <h5 class="mt-2">Dabīgs kalnu avots</h5>
            <p>Skats uz kalnu avotu, kur ūdens ir tīrs un neapstrādāts, nodrošinot dzīvību dabā.</p>
        </div>
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1462331940025-496dfbfc7564?auto=format&fit=crop&w=600&q=80"
                 alt="Ūdens pilieni" class="img-fluid rounded shadow-sm">
            <h5 class="mt-2">Ūdens pilieni</h5>
            <p>Ūdens ir unikāls savā vienkāršībā, taču tam ir milzīga nozīme mūsu veselībā un planētas aizsardzībā.</p>
        </div>
    </div>
</div>
@endsection

@section('sidemenu')
<nav>
    <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Sākums</a></li>
        @auth
            <li><a href="{{ url('/data') }}" class="{{ request()->is('data*') ? 'active' : '' }}">Dati</a></li>
        @endauth
        <li><a href="{{ url('/contacts') }}" class="{{ request()->is('contacts') ? 'active' : '' }}">Kontakti</a></li>
    </ul>
</nav>
@endsection

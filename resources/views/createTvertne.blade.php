@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Pievinot Tvertne</h1>

    @if($errors->any())
        @foreach ($errors->all() as $kluda)
            <div class="alert alert-danger">{{ $kluda }}</div>
        @endforeach
    @endif

    <form action="/data/newSubmitTvertne" method="POST">
        @csrf

        <div class="container" style="max-width: 60%;">
            <div class="mb-3">
                <label for="Nosaukums" class="form-label">Nosaukums</label>
                <input type="text" class="form-control" id="Nosaukums" name="Nosaukums" placeholder="Nosaukums">
            </div>

            <div class="mb-3">
                <label for="UdensApjoms_L" class="form-label">UdensApjoms(L)</label>
                <input type="text" class="form-control" id="UdensApjoms_L" name="UdensApjoms_L" placeholder="UdensApjoms_L">
            </div>

            <button type="submit" class="btn btn-info">Saglabāt</button>
        </div>
    </form>
    <br><br>
</div>
@endsection
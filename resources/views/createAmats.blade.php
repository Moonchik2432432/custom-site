@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Pievinot Amats</h1>

    @if($errors->any())
        @foreach ($errors->all() as $kluda)
            <div class="alert alert-danger">{{ $kluda }}</div>
        @endforeach
    @endif

    <form action="/data/newSubmitAmats" method="POST">
        @csrf

        <div class="container" style="max-width: 60%;">
            <div class="mb-3">
                <label for="nosaukums" class="form-label">Nosaukums</label>
                <input type="text" class="form-control" id="nosaukums" name="nosaukums" placeholder="Nosaukums">
            </div>

            <button type="submit" class="btn btn-info">Saglabāt</button>
        </div>
    </form>
    <br><br>
</div>
@endsection
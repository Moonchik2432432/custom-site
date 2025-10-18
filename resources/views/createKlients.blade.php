@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Pievinot Klients</h1>

    @if($errors->any())
        @foreach ($errors->all() as $kluda)
            <div class="alert alert-danger">{{ $kluda }}</div>
        @endforeach
    @endif

    <form action="/data/newSubmitKlients" method="POST">
        @csrf

        <div class="container" style="max-width: 60%;">
            <div class="mb-3">
                <label for="Uznenuma_nosaukums" class="form-label">Uznenuma nosaukums</label>
                <input type="text" class="form-control" id="Uznenuma_nosaukums" name="Uznenuma_nosaukums" placeholder="Uznenuma_nosaukums">
            </div>

            <div class="mb-3">
                <label for="Adrese" class="form-label">Adrese</label>
                <input type="text" class="form-control" id="Adrese" name="Adrese" placeholder="Adrese">
            </div>

            <div class="mb-3">
                <label for="Talrunis" class="form-label">Talrunis</label>
                <input type="text" class="form-control" id="Talrunis" name="Talrunis" placeholder="Talrunis">
            </div>

            <button type="submit" class="btn btn-info">Saglabāt</button>
        </div>
    </form>
    <br><br>
</div>
@endsection
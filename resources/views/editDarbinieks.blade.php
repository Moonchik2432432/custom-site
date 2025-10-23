@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Rediģēt Darbinieks</h1>

    @if($errors->any())
        @foreach ($errors->all() as $kluda)
            <div class="alert alert-danger">{{ $kluda }}</div>
        @endforeach
    @endif

    <form action="/data/updateDarbinieks/{{ $darbinieks->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Vards">Vards</label>
            <input type="text" class="form-control" name="Vards" value="{{ $darbinieks->Vards }}">
        </div>
        <div class="mb-3">
            <label for="Uzvards">Uzvards</label>
            <input type="text" class="form-control" name="Uzvards" value="{{ $darbinieks->Uzvards }}">
        </div>
       <div class="mb-3">
            <label for="Amats_ID">Amats</label>
            <input type="text" class="form-control" name="Amats_ID" value="{{ $darbinieks->Amats_ID }}">
        </div>
        <div class="mb-3">
            <label for="Talrunis">Talrunis</label>
            <input type="text" class="form-control" name="Talrunis" value="{{ $darbinieks->Talrunis }}">
        </div>

        <button type="submit" class="btn btn-warning">Atjaunināt</button>
    </form>
</div>
@endsection

<!--Наследования основного шаблона-->
@extends('layouts.app')

<!--Определения содержимого страницы-->
@section('content')

<h1>Kontakti</h1>

<!-- bloks kludam--->
@if($errors->any())
    @foreach ($errors->all() as $kluda)
        {{ $kluda }} <br><br>
    @endforeach
@endif



    <form action="/data/newSubmit" method="POST">
        @csrf

        <div class="container" style="max-width: 60%;">
            <div class="mb-3">
                <label for="name" class="form-label">Vārds, Uzvārds</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Vārds Uzvārds">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-pasta adrese</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="vards@piemers.com">
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Tēma</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Tēma">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Ziņojuma teksts</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-info">Saglabāt</button>
        </div>
    </form>

<!--Завершения страницы-->
@endsection

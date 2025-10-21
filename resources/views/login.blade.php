<!-- saite tiek parsutita uz mapi "layouts" uz lappu "app"  -->
@extends ('layouts.app')


<!-- saite ietapa sekciju "data" kas iekša satur <p>  -->
@section('content')

@section('pazi')

<!--paziņojus-->
<div class="alert alert-info">
@if(session('success'))
{{ session('success') }}
</div>
@endif

@endsection

<h1>Ielogošanas logs</h1>
<form method="POST" action="/loginp">
    @csrf

        <label for="name" class="form-label">Login</label></br>
        <input type="text" class="form-control" id="name" name="name"></br>

        <label for="password" class="form-label">Parole:</label></br>
        <input type="password" class="form-control" id="password" name="password"></br>
        <button type="submit" class="btn btn-outline-dark">Ieiet</button>
        <a href="/login" class="btn btn-info" > Reģistreties</a>
    <form>


@endsection

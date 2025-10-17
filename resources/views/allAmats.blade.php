@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">Amats tabula</h1>

    <a href="/data/createAmats">
        <button class="btn btn-success btn-sm">Pievinot</button>
    </a> <br>

    @if($errors->any())
    @foreach ($errors->all() as $kluda)
        {{ $kluda }} <br><br>
    @endforeach
@endif


    @if($amats->isEmpty())
        <p>Datus nav.</p>
    @else
        @php
            $headers = array_keys($amats->first()->toArray());
        @endphp

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    @foreach($headers as $header)
                        <th>{{ ucfirst($header) }}</th>
                    @endforeach
                    <th>Darbības</th>
                </tr>
            </thead>
            <tbody>
                @foreach($amats as $item)
                    <tr>
                        @foreach($headers as $field)
                            <td>{{ $item->$field }}</td>
                        @endforeach
                        <td>
                            <a href="/data/all/{{$item->id}}/deleteAmats">
                                <button class="btn btn-danger btn-sm">Dzēst</button>
                            </a>
                            <a href="/data/all/{{$item->id}}/showAmatsDetails">
                                <button class="btn btn-success btn-sm">Informacija</button>
                            </a>
                            <a href="/data/editAmats/{{$item->id}}">
                                <button class="btn btn-warning btn-sm">Rediģēt</button>
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection

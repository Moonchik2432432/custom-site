@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">Klients tabula</h1>

    <a href="/data/createKlients">
        <button class="btn btn-success btn-sm">Pievinot</button>
    </a> <br> <br>

    @if($klients->isEmpty())
        <p>Datus nav.</p>
    @else
        @php
            $headers = array_keys($klients->first()->toArray());
        @endphp

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    @foreach($headers as $header)
                        <th>{{ ucfirst($header) }}</th>
                    @endforeach
                    <th>Klients</th>
                </tr>
            </thead>
            <tbody>
                @foreach($klients as $item)
                    <tr>
                        @foreach($headers as $field)
                            <td>{{ $item->$field }}</td>
                        @endforeach
                        <td>
                            <a href="/data/all/{{$item->id}}/deleteKlients">
                                <button class="btn btn-danger btn-sm">Dzēst</button>
                            </a>
                            <a href="/data/all/{{$item->id}}/showKlientsDetails">
                                <button class="btn btn-success btn-sm">Informacija</button>
                            </a>
                            <a href="/data/editKlients/{{$item->id}}">
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

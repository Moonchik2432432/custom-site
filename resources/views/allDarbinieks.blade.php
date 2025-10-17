@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">Darbinieks tabula</h1>

    @if($darbinieks->isEmpty())
        <p>Datus nav.</p>
    @else
        @php
            $headers = array_keys($darbinieks->first()->toArray());
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
                @foreach($darbinieks as $item)
                    <tr>
                        @foreach($headers as $field)
                            <td>{{ $item->$field }}</td>
                        @endforeach
                        <td>
                            <a href="/data/all/{{$item->id}}/deleteDarbinieks">
                                <button class="btn btn-danger btn-sm">Dzēst</button>
                            </a>
                            <a href="/data/all/{{$item->id}}/showDarbinieksDetails">
                                <button class="btn btn-success btn-sm">Informacija</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection

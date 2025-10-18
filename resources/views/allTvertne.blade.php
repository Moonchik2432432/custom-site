@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">Tvertne tabula</h1>

    <a href="/data/createTvertne">
        <button class="btn btn-success btn-sm">Pievinot</button>
    </a> <br> <br>

 <!---Проверка на наличия таблицы-->
    @if($tvertne->isEmpty())
        <p>Datus nav.</p>
    @else
        @php
            $headers = array_keys($tvertne->first()->toArray());
        @endphp

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <!---Перебирает заголовки столбцов-->
                    @foreach($headers as $header)
                        <th>{{ ucfirst($header) }}</th>
                    @endforeach
                    <th>Tvertne</th>
                </tr>
            </thead>
            <tbody>
                <!---Перебирает данные столбца и добавляет в них кнопки-->
                @foreach($tvertne as $item)
                    <tr>
                        @foreach($headers as $field)
                            <td>{{ $item->$field }}</td>
                        @endforeach
                        <td>
                            <a href="/data/all/{{$item->id}}/deleteTvertne">
                            <button class="btn btn-danger btn-sm">Dzēst</button>
                            </a>
                            <a href="/data/all/{{$item->id}}/showTvertneDetails">
                                <button class="btn btn-success btn-sm">Informacija</button>
                            </a>
                            <a href="/data/editTvertne/{{$item->id}}">
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

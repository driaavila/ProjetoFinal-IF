@extends('layouts.main')

@section('title', 'Reservas')

@section('content')

<table class="table">
    <thead>
        <tr>
        <th scope="col">Dia da semana</th>
        <th scope="col">Vegetariano</th>
        </tr>
    </thead>
    <tbody>
    @if($reservas)
        @foreach($reservas as $reserva)
    <tr>    
      <th>{{ $reserva->dia_semana }}</th>
      <td>{{ $reserva->vegetariano }}</td>
    </tr>
        @endforeach
    @endif
    </body>

</table>


@endsection
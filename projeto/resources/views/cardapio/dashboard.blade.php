@extends('layouts.main')

@section('title', 'Reservas')

@section('content')

<table class="table">
    <thead>
        <tr>
        <th scope="col">Dia da semana</th>
        <th scope="col">Opção</th>
        <th scope="col">Vegetariano</th> 
        <th scope="col">Deletar</th>
        </tr>
    </thead>
    <tbody>
    @if($reservas)
        @foreach($reservas as $reserva)
    <tr>    
      <td>{{ $reserva->dia_semana }}</td>
      <td>{{ $reserva->opcao }}</td>
      <td>{{ $reserva->vegetariano }}</td>
      <td>
        <form action="/reserva/{{ $reserva->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon></button>
        </form>
      </td>
     </tr>
        @endforeach
    @endif
    </body>

</table>


@endsection
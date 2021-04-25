@extends('layouts.main')

@section('title', 'Restaurante Universitário')

@section('content')

 <table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Café da manhã</th>
            <th scope="col">Almoço</th>
            <th scope="col">Jantar</th>
        </tr>
    </thead>
    <tbody>
    @if($cardapios)
        @foreach($cardapios as $cardapio)
    <tr>    
      <th>{{ $cardapio->dia_semana }}</th>
      <td>{{ $cardapio->cafe }}</td>
      <td>{{ $cardapio->almoco }}</td>
      <td>{{ $cardapio->jantar }}</td>
    </tr>
        @endforeach
    @endif
    </body>

   </table>
@endsection
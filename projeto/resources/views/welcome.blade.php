@extends('layouts.main')

@section('title', 'Restaurante Universitário')

@section('content')

 <table class="table">
    <thead>
        <tr>
            <th scope="col">Dia da semana</th>
            <th scope="col">Café da manhã</th>
            <th scope="col">Almoço</th>
            <th scope="col">Almoço Vegetariano</th>
            <th scope="col">Jantar</th>
            <th scope="col">Jantar Vegetariano</th>
        </tr>
    </thead>
    <tbody>
    @if($cardapios)
        @foreach($cardapios as $cardapio)
    <tr>    
      <th>{{ $cardapio->dia_semana }}</th>
      <td>{{ $cardapio->cafe }}</td>
      <td>{{ $cardapio->almoco }}</td>
      <td>{{ $cardapio->almoco_veg }}</td>
      <td>{{ $cardapio->jantar }}</td>
      <td>{{ $cardapio->jantar_veg }}</td>
    </tr>
        @endforeach
    @endif
    </body>

   </table>
@endsection
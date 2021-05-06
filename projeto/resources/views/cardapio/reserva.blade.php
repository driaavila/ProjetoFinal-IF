@extends('layouts.main')

@section('title', 'Reservas')

@section('content')

<div id="reserva-create-container" class="col-md-6 offset-md-3">
    <h1>Faça sua Reserva</h1>
    <form action="/reserva" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="title">Dia da Semana (selecione o dia):</label>
        <select name="dia_semana" id="dia_semana" class="form-control">
            <option>Segunda-Feira</option>
            <option>Terça-Feira</option>
            <option>Quarta-Feira</option>
            <option>Quinta-Feira</option>
            <option>Sexta-Feira</option>
        </select>
        </div>

        <div class="form-group">
            <label for="title">Opção vegetariana?</label>
            <select name="vegetariano" id="vegetariano" class="form-control">
                <option >Não</option>
                <option >Sim</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Reservar">
    </form>
</div>
@endsection
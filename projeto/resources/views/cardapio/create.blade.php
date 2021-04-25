@extends('layouts.main')

@section('title', 'Criar Cardapio')

@section('content')

<div id="cardapios-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre o Cardápio do dia</h1>
    <form action="/cardapio" method="POST" enctype="multipart/form-data">
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
            <label for="title">Café da manhã:</label>
            <textarea name="cafe" id="cafe" class="form-control" placeholder="Insira o cardápio do Café da Manhã"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Almoço:</label>
            <textarea name="almoco" id="almoco" class="form-control" placeholder="Insira o cardápio do Almoço"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Jantar:</label>
            <textarea name="jantar" id="jantar" class="form-control" placeholder="Insira o cardápio do Jantar"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Cardápio">
    </form>
</div>

@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cardapio;

class CardapioController extends Controller
{
    public function index(){

        $cardapios = Cardapio::all(); //pegando todos os eventos do banco de dados
    
        return view('welcome', ['cardapios' => $cardapios]);                
    }

    public function create(){
        return view('cardapio.create');
    }


    public function store(Request $request) {
        $cardapios = new Cardapio;

        $cardapios->dia_semana = $request->dia_semana;
        $cardapios->cafe = $request->cafe;
        $cardapios->almoco = $request->almoco;
        $cardapios->jantar = $request->jantar;

        $cardapios->save();

        return redirect('/')->with('msg', 'Cardápio cadastrado com sucesso!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cardapio;
use App\Models\Reserva;

class CardapioController extends Controller
{
    public function index(){

        $cardapios = Cardapio::all(); //pegando todos os eventos do banco de dados
    
        return view('welcome', ['cardapios' => $cardapios]);                
    }

    public function create(){
        return view('cardapio.create');
    }

    public function reserva(){
        return view('cardapio.reserva');
    }

    public function dashboard(){

        $reservas = Reserva::all();

        return view('cardapio.dashboard',['reservas' => $reservas]);
    }

    public function info(){
        return view('cardapio.info');
    }

    public function store(Request $request) {
        $cardapios = new Cardapio;

        $cardapios->dia_semana = $request->dia_semana;
        $cardapios->cafe = $request->cafe;
        $cardapios->almoco = $request->almoco;
        $cardapios->almoco_veg = $request->almoco_veg;
        $cardapios->jantar = $request->jantar;
        $cardapios->jantar_veg = $request->jantar_veg;

        $cardapios->save();

        return redirect('/')->with('msg', 'Cardápio cadastrado com sucesso!');
    }

    public function dash(Request $request) {
        $reservas = new Reserva;

        $reservas->dia_semana = $request->dia_semana;
        $reservas->vegetariano = $request->vegetariano;
        $reservas->opcao = $request->opcao;

        $user = auth()->user();
        $reservas->user_id = $user->id;
        
        $reservas->save();

        return redirect('/dashboard')->with('msg', 'Reserva realizada com sucesso!');
    }

    public function destroy($id){
        
        Reserva::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Reserva excluída com sucesso!');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\jogadores;

class JogadoresController extends Controller
{
    public function index()
    {
        return jogadores::all();
    }
    public function store(Request $request){
        $jogador = jogadores::create([
            'cpf' => $request->cpf,
            'nome' => $request->nome,
            'numero_camiseta' => $request->numero_camiseta,
            'id_time' => $request->id_time,
        ]);
        return $jogador;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partidas;
use Illuminate\Support\Facades\DB;

class PartidasController extends Controller
{
    public function index()
    {
        return partidas::all();
    }
    public function store(Request $request){ 
        $partidas = partidas::create([
            'horario_inicio' => $request->horario_inicio,
            'horario_termino' => $request->horario_termino,
            'placar' => $request->placar,
            'cartao_amarelo' => $request->cartao_amarelo,
            'cartao_vermelho' => $request->cartao_vermelho,
            'time_casa' => $request->time_casa,
            'time_fora' => $request->time_fora,
        ]);
        $pontuacao = $request->placar;
        $enviarpont = explode("x",$pontuacao);
        $ponto_casa = (int)$enviarpont[0];
        $ponto_fora = (int)$enviarpont[1];
        if($ponto_casa > $ponto_fora){
            $time1 = DB::table('times')->where('id', $request->time_casa)->first();
            $affected = DB::table('times')
                ->where('id',$request->time_casa)
                ->update(['pontos' => $time1->pontos + 3]);
        }else if($ponto_fora > $ponto_casa){
            $time2 = DB::table('times')->where('id', $request->time_fora)->first();
            $affected = DB::table('times')
                ->where('id',$request->time_fora)
                ->update(['pontos' => $time2->pontos + 3]);
        }else{
            $time_c = DB::table('times')->where('id', $request->time_casa)->first();
            $time_f = DB::table('times')->where('id', $request->time_fora)->first();
            $affected = DB::table('times')
                ->where('id',$request->time_casa)
                ->update(['pontos' => $time_c->pontos + 1]);
            $affected = DB::table('times')
                ->where('id',$request->time_fora)
                ->update(['pontos' => $time_f->pontos + 1]);
        }
        return  $partidas;
    }

}

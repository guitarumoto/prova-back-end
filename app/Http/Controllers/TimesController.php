<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\times;
use Illuminate\Support\Facades\DB;

class TimesController extends Controller
{
    public function index()
    {
        //return times::all();
        $classificacao = DB::table('times')->orderBy('pontos', 'desc')->get();
        return $classificacao;
    }
    public function store(Request $request){
        $times = times::create([
            'nome_time' => $request->nome_time
        ]);
        return $times;
    }
    public function classificacao(){
        $classificacao = DB::table('times')->orderBy('pontos', 'desc')->get();
        return $classificacao;
    }
}

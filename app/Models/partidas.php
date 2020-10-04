<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partidas extends Model
{
    use HasFactory;
    protected $fillable = ['horario_inicio','horario_termino','placar','cartao_amarelo','cartao_vermelho', 'time_casa', 'time_fora'];
}

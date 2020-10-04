<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jogadores extends Model
{
    use HasFactory;
    protected $fillable = ['cpf','nome','numero_camiseta', 'id_time'];
}

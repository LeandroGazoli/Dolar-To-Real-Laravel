<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cotacao extends Model
{
    use HasFactory;
    protected $fillable =['user_id', 'valorOriginal', 'quantidade', 'moeda', 'taxaBoleto', 'taxaCartao'];
}
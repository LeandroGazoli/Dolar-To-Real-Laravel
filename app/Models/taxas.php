<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taxas extends Model
{
    use HasFactory;
    protected $fillable = ['cartao', 'boleto', 'taxamax', 'taxabasica'];
}

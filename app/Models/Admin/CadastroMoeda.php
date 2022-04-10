<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroMoeda extends Model
{
    use HasFactory;
    protected $fillable = ['moeda', 'nome', 'descricao'];
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'nome',
        'descricao',
        'endereco',
        'telefone',
        'horario_funcionamento',
        'website',
        'avalicacao'
    ];

    public function cardapios()
    {
        return $this->hasMany(Cardapio::class);
    }
}

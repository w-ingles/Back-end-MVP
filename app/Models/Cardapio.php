<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'cardapio_item';
    protected $fillable = [
        'restaurante_id',
        'nome',
        'descricao',
        'preco'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Cardapio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CardapiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Prato Executivo',
            'descricao' => 'Um prato executivo completo e saboroso.',
            'preco' => 29.90
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Sobremesa Especial',
            'descricao' => 'Uma sobremesa deliciosa para completar sua refeição.',
            'preco' => 15.00
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Feijoada Completa',
            'descricao' => 'Feijoada completa com todos os acompanhamentos.',
            'preco' => 35.00
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Bolo de Fubá',
            'descricao' => 'Bolo de fubá caseiro com um toque especial.',
            'preco' => 10.00
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Sushi Combo',
            'descricao' => 'Combo de sushi com 12 peças.',
            'preco' => 45.00
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Tartar de Salmão',
            'descricao' => 'Tartar de salmão fresco com temperos especiais.',
            'preco' => 38.00
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Combo Burger',
            'descricao' => 'Hambúrguer com batata frita e refrigerante.',
            'preco' => 25.00
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Milkshake de Chocolate',
            'descricao' => 'Milkshake de chocolate cremoso.',
            'preco' => 12.00
        ]);
    }
}

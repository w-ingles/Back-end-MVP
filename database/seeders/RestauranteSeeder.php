<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Restaurante;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Saboroso',
            'descricao' => 'Um restaurante com pratos variados e deliciosos.',
            'endereco' => 'Rua das Flores, 123',
            'telefone' => '123456789',
            'horario_funcionamento' => '08:00 - 22:00',
            'website' => 'http://sabores.com',
            'avaliacao' => 4.5,
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Delícias da Vovó',
            'descricao' => 'Comida caseira com sabor de infância.',
            'endereco' => 'Avenida Brasil, 456',
            'telefone' => '987654321',
            'horario_funcionamento' => '10:00 - 20:00',
            'website' => 'http://deliciasdavovo.com',
            'avaliacao' => 4.7,
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Gourmet Especial',
            'descricao' => 'Experiências gastronômicas únicas.',
            'endereco' => 'Praça Central, 789',
            'telefone' => '555123456',
            'horario_funcionamento' => '12:00 - 23:00',
            'website' => 'http://gourmetespecial.com',
            'avaliacao' => 4.8,
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Fast Food Mania',
            'descricao' => 'Rápido e delicioso.',
            'endereco' => 'Rua da Alegria, 321',
            'telefone' => '444987654',
            'horario_funcionamento' => '11:00 - 02:00',
            'website' => 'http://fastfoodmania.com',
            'avaliacao' => 4.2,
        ]);
    }
}

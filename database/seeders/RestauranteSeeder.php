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
            //'id' => (string) Str::uuid(),
            'id' => '71cbcc40-0a38-4f55-9b06-f64352e9b0f2',
            'nome' => 'Restaurante Saboroso',
            'descricao' => 'Um restaurante com pratos variados e deliciosos.',
            'endereco' => 'Rua das Flores, 123',
            'telefone' => '123456789',
            'horario_funcionamento' => '08:00 - 22:00',
            'website' => 'http://sabores.com',
            'avaliacao' => 4.5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
        ]);

        Restaurante::create([
            //'id' => (string) Str::uuid(),
            'id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Delícias da Vovó',
            'descricao' => 'Comida caseira com sabor de infância.',
            'endereco' => 'Avenida Brasil, 456',
            'telefone' => '987654321',
            'horario_funcionamento' => '10:00 - 20:00',
            'website' => 'http://deliciasdavovo.com',
            'avaliacao' => 4.7,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
        ]);

        Restaurante::create([
            //'id' => (string) Str::uuid(),
            'id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Gourmet Especial',
            'descricao' => 'Experiências gastronômicas únicas.',
            'endereco' => 'Praça Central, 789',
            'telefone' => '555123456',
            'horario_funcionamento' => '12:00 - 23:00',
            'website' => 'http://gourmetespecial.com',
            'avaliacao' => 4.8,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
        ]);

        Restaurante::create([
            //'id' => (string) Str::uuid(),
            'id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Fast Food Mania',
            'descricao' => 'Rápido e delicioso.',
            'endereco' => 'Rua da Alegria, 321',
            'telefone' => '444987654',
            'horario_funcionamento' => '11:00 - 02:00',
            'website' => 'http://fastfoodmania.com',
            'avaliacao' => 4.2,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
        ]);
    }
}

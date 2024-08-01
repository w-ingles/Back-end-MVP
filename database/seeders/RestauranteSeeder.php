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
            'id' => '71cbcc40-0a38-4f55-9b06-f64352e9b0f2',
            'nome' => 'Restaurante Japonês',
            'descricao' => 'Especialidades da culinária japonesa.',
            'endereco' => 'Rua Sakura, 123',
            'telefone' => '(11) 91234-5678',
            'horario_funcionamento' => '11:00 - 23:00',
            'website' => 'http://japones.com',
            'avaliacao' => 5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Japones.png',
        ]);

        Restaurante::create([
            'id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Restaurante Mineiro',
            'descricao' => 'Comida típica de Minas Gerais.',
            'endereco' => 'Rua das Gerais, 456',
            'telefone' => '(31) 92345-6789',
            'horario_funcionamento' => '10:00 - 22:00',
            'website' => 'http://mineiro.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Mineiro.png',
        ]);

        Restaurante::create([
            'id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Restaurante Coreano',
            'descricao' => 'Sabores autênticos da Coreia.',
            'endereco' => 'Rua Seoul, 789',
            'telefone' => '(21) 93456-7890',
            'horario_funcionamento' => '12:00 - 23:00',
            'website' => 'http://coreano.com',
            'avaliacao' => 3,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Coreano.png',
        ]);

        Restaurante::create([
            'id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Restaurante Italiano',
            'descricao' => 'Tradição e sabor da Itália.',
            'endereco' => 'Rua Roma, 321',
            'telefone' => '(19) 94567-8901',
            'horario_funcionamento' => '11:00 - 22:00',
            'website' => 'http://italiano.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Italiano.png',
        ]);

        Restaurante::create([
            'id' => 'e731c5d0-ea32-4cfa-8c8d-8fcbe690c9cd',
            'nome' => 'Restaurante Mexicano',
            'descricao' => 'Culinária picante e saborosa do México.',
            'endereco' => 'Rua Fiesta, 654',
            'telefone' => '(41) 95678-9012',
            'horario_funcionamento' => '10:00 - 21:00',
            'website' => 'http://mexicano.com',
            'avaliacao' => 2,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Mexicano.png',
        ]);

        Restaurante::create([
            'id' => 'f841b6c0-0a1d-4b19-8c7f-9b2b1f4e9e5f',
            'nome' => 'Restaurante Francês',
            'descricao' => 'Gastronomia francesa clássica.',
            'endereco' => 'Rua Paris, 987',
            'telefone' => '(51) 96789-0123',
            'horario_funcionamento' => '12:00 - 23:00',
            'website' => 'http://frances.com',
            'avaliacao' => 5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Frances.png',
        ]);

        Restaurante::create([
            'id' => '07234abc-d456-4ef9-a789-0b1c2d345678',
            'nome' => 'Restaurante Tailandês',
            'descricao' => 'Exóticos sabores da Tailândia.',
            'endereco' => 'Rua Bangkok, 258',
            'telefone' => '(61) 97890-1234',
            'horario_funcionamento' => '11:00 - 22:00',
            'website' => 'http://tailandes.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Tailandes.png',
        ]);

        Restaurante::create([
            'id' => '18245bcd-e567-4f89-b123-0c1d2e345678',
            'nome' => 'Restaurante Indiano',
            'descricao' => 'Aromas e especiarias da Índia.',
            'endereco' => 'Rua Delhi, 159',
            'telefone' => '(71) 98901-2345',
            'horario_funcionamento' => '10:00 - 22:00',
            'website' => 'http://indiano.com',
            'avaliacao' => 3,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Indiano.png',
        ]);

        Restaurante::create([
            'id' => '29256cde-f678-40ba-c234-1d2e3f456789',
            'nome' => 'Brazieiro',
            'descricao' => 'Os melhores pratos do Brasil.',
            'endereco' => 'Rua Brasil, 753',
            'telefone' => '(81) 99012-3456',
            'horario_funcionamento' => '11:00 - 23:00',
            'website' => 'http://brasileiro.com',
            'avaliacao' => 5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Brasileiro.png',
        ]);

        Restaurante::create([
            'id' => '3a367def-0789-41cb-d345-2e4f56789012',
            'nome' => 'Restaurante Árabe',
            'descricao' => 'Autêntica culinária árabe.',
            'endereco' => 'Rua Cairo, 357',
            'telefone' => '(91) 90123-4567',
            'horario_funcionamento' => '10:00 - 22:00',
            'website' => 'http://arabe.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '/imgs/restaurante/Arabe.png',
        ]);


    }
}

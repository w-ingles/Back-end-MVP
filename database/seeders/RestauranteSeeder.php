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
            'nome' => 'Restaurante Japonês',
            'descricao' => 'Especialidades da culinária japonesa.',
            'endereco' => 'Rua Sakura, 123',
            'telefone' => '(11) 91234-5678',
            'horario_funcionamento' => '11:00 - 23:00',
            'website' => 'http://japones.com',
            'avaliacao' => 5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Mineiro',
            'descricao' => 'Comida típica de Minas Gerais.',
            'endereco' => 'Rua das Gerais, 456',
            'telefone' => '(31) 92345-6789',
            'horario_funcionamento' => '10:00 - 22:00',
            'website' => 'http://mineiro.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Coreano',
            'descricao' => 'Sabores autênticos da Coreia.',
            'endereco' => 'Rua Seoul, 789',
            'telefone' => '(21) 93456-7890',
            'horario_funcionamento' => '12:00 - 23:00',
            'website' => 'http://coreano.com',
            'avaliacao' => 3,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Italiano',
            'descricao' => 'Tradição e sabor da Itália.',
            'endereco' => 'Rua Roma, 321',
            'telefone' => '(19) 94567-8901',
            'horario_funcionamento' => '11:00 - 22:00',
            'website' => 'http://italiano.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Mexicano',
            'descricao' => 'Culinária picante e saborosa do México.',
            'endereco' => 'Rua Fiesta, 654',
            'telefone' => '(41) 95678-9012',
            'horario_funcionamento' => '10:00 - 21:00',
            'website' => 'http://mexicano.com',
            'avaliacao' => 2,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Francês',
            'descricao' => 'Gastronomia francesa clássica.',
            'endereco' => 'Rua Paris, 987',
            'telefone' => '(51) 96789-0123',
            'horario_funcionamento' => '12:00 - 23:00',
            'website' => 'http://frances.com',
            'avaliacao' => 5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Tailandês',
            'descricao' => 'Exóticos sabores da Tailândia.',
            'endereco' => 'Rua Bangkok, 258',
            'telefone' => '(61) 97890-1234',
            'horario_funcionamento' => '11:00 - 22:00',
            'website' => 'http://tailandes.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Indiano',
            'descricao' => 'Aromas e especiarias da Índia.',
            'endereco' => 'Rua Delhi, 159',
            'telefone' => '(71) 98901-2345',
            'horario_funcionamento' => '10:00 - 22:00',
            'website' => 'http://indiano.com',
            'avaliacao' => 3,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Brasileiro',
            'descricao' => 'Os melhores pratos do Brasil.',
            'endereco' => 'Rua Brasil, 753',
            'telefone' => '(81) 99012-3456',
            'horario_funcionamento' => '11:00 - 23:00',
            'website' => 'http://brasileiro.com',
            'avaliacao' => 5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Árabe',
            'descricao' => 'Autêntica culinária árabe.',
            'endereco' => 'Rua Cairo, 357',
            'telefone' => '(91) 90123-4567',
            'horario_funcionamento' => '10:00 - 22:00',
            'website' => 'http://arabe.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Vegetariano',
            'descricao' => 'Opções deliciosas e saudáveis.',
            'endereco' => 'Rua Verde, 159',
            'telefone' => '(31) 91234-5678',
            'horario_funcionamento' => '09:00 - 21:00',
            'website' => 'http://vegetariano.com',
            'avaliacao' => 3,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Vegano',
            'descricao' => 'Comida vegana saborosa.',
            'endereco' => 'Rua Natureza, 951',
            'telefone' => '(41) 92345-6789',
            'horario_funcionamento' => '10:00 - 20:00',
            'website' => 'http://vegano.com',
            'avaliacao' => 2,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Mediterrâneo',
            'descricao' => 'Sabores frescos do Mediterrâneo.',
            'endereco' => 'Rua Mar Azul, 753',
            'telefone' => '(51) 93456-7890',
            'horario_funcionamento' => '11:00 - 22:00',
            'website' => 'http://mediterraneo.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Alemão',
            'descricao' => 'Culinária tradicional alemã.',
            'endereco' => 'Rua Munique, 159',
            'telefone' => '(61) 94567-8901',
            'horario_funcionamento' => '12:00 - 23:00',
            'website' => 'http://alemao.com',
            'avaliacao' => 5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Português',
            'descricao' => 'Sabores de Portugal.',
            'endereco' => 'Rua Lisboa, 357',
            'telefone' => '(71) 95678-9012',
            'horario_funcionamento' => '10:00 - 22:00',
            'website' => 'http://portugues.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Espanhol',
            'descricao' => 'Paellas e tapas deliciosas.',
            'endereco' => 'Rua Madri, 951',
            'telefone' => '(81) 96789-0123',
            'horario_funcionamento' => '11:00 - 22:00',
            'website' => 'http://espanhol.com',
            'avaliacao' => 3,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Grego',
            'descricao' => 'Autêntica comida grega.',
            'endereco' => 'Rua Atenas, 753',
            'telefone' => '(91) 97890-1234',
            'horario_funcionamento' => '12:00 - 23:00',
            'website' => 'http://grego.com',
            'avaliacao' => 5,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Peruano',
            'descricao' => 'Sabores únicos do Peru.',
            'endereco' => 'Rua Lima, 159',
            'telefone' => '(11) 98901-2345',
            'horario_funcionamento' => '10:00 - 21:00',
            'website' => 'http://peruano.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Turco',
            'descricao' => 'Culinária rica da Turquia.',
            'endereco' => 'Rua Istambul, 753',
            'telefone' => '(21) 99012-3456',
            'horario_funcionamento' => '11:00 - 22:00',
            'website' => 'http://turco.com',
            'avaliacao' => 3,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Africano',
            'descricao' => 'Delícias do continente africano.',
            'endereco' => 'Rua Nairobi, 357',
            'telefone' => '(19) 90123-4567',
            'horario_funcionamento' => '10:00 - 22:00',
            'website' => 'http://africano.com',
            'avaliacao' => 2,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);

        Restaurante::create([
            'id' => (string) Str::uuid(),
            'nome' => 'Restaurante Libanês',
            'descricao' => 'Sabores tradicionais do Líbano.',
            'endereco' => 'Rua Beirute, 159',
            'telefone' => '(31) 91234-5678',
            'horario_funcionamento' => '10:00 - 21:00',
            'website' => 'http://libanes.com',
            'avaliacao' => 4,
            'proprietario_id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            'patch_foto' => '',
        ]);


    }
}

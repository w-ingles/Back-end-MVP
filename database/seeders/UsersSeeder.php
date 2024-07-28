<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 'e199dcb5-b243-4085-9655-0c70b4d74432',
            //'id' => (string) Str::uuid(),
            'name' => 'fred',
            'email' => 'fred@graodireto.com.br',
            'password' => Hash::make('123Fred'),
            'remember_token' => Str::random(10),
        ]);;
    }
}

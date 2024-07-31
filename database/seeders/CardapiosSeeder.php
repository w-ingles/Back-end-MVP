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

        // Itens de cardápio para Restaurante Japonês
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '71cbcc40-0a38-4f55-9b06-f64352e9b0f2',
            'nome' => 'Sushi Combo',
            'descricao' => 'Variedade de sushis frescos.',
            'preco' => 49.90,
            'patch_foto' => 'cardapiositens/Sushi.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '71cbcc40-0a38-4f55-9b06-f64352e9b0f2',
            'nome' => 'Tempura',
            'descricao' => 'Legumes e camarão empanados.',
            'preco' => 34.90,
            'patch_foto' => 'cardapiositens/Tempura.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '71cbcc40-0a38-4f55-9b06-f64352e9b0f2',
            'nome' => 'Sashimi',
            'descricao' => 'Fatias de peixe cru.',
            'preco' => 44.90,
            'patch_foto' => 'cardapiositens/Sashimi.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '71cbcc40-0a38-4f55-9b06-f64352e9b0f2',
            'nome' => 'Udon',
            'descricao' => 'Sopa de macarrão japonês.',
            'preco' => 29.90,
            'patch_foto' => 'cardapiositens/Udon.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '71cbcc40-0a38-4f55-9b06-f64352e9b0f2',
            'nome' => 'Yakitori',
            'descricao' => 'Espetinho de frango grelhado.',
            'preco' => 19.90,
            'patch_foto' => 'cardapiositens/Yakitori.png',
        ]);

        // Itens de cardápio para Restaurante Mineiro
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Feijoada',
            'descricao' => 'Tradicional feijoada mineira.',
            'preco' => 39.90,
            'patch_foto' => 'cardapiositens/Feijoada.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Tutu de Feijão',
            'descricao' => 'Tutu de feijão com torresmo e couve.',
            'preco' => 29.90,
            'patch_foto' => 'cardapiositens/Tutu.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Pão de Queijo',
            'descricao' => 'Pão de queijo quentinho.',
            'preco' => 9.90,
            'patch_foto' => 'cardapiositens/Pao.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Frango com Quiabo',
            'descricao' => 'Frango caipira com quiabo.',
            'preco' => 34.90,
            'patch_foto' => 'cardapiositens/Frango.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '81ce8c1e-ce90-476a-aa84-d26347ae987b',
            'nome' => 'Doce de Leite',
            'descricao' => 'Doce de leite artesanal.',
            'preco' => 14.90,
            'patch_foto' => 'cardapiositens/Doce.png',
        ]);

        // Itens de cardápio para Restaurante Coreano
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Bibimbap',
            'descricao' => 'Arroz com vegetais e carne.',
            'preco' => 39.90,
            'patch_foto' => 'cardapiositens/Bibimbap.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Kimchi',
            'descricao' => 'Repolho fermentado picante.',
            'preco' => 14.90,
            'patch_foto' => 'cardapiositens/Kimchi.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Bulgogi',
            'descricao' => 'Carne marinada grelhada.',
            'preco' => 44.90,
            'patch_foto' => 'cardapiositens/Bulgogi.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Tteokbokki',
            'descricao' => 'Bolinhos de arroz picantes.',
            'preco' => 24.90,
            'patch_foto' => 'cardapiositens/Tteokbokki.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'a3017e38-56d6-4580-a266-63ffba0c420d',
            'nome' => 'Japchae',
            'descricao' => 'Macarrão de batata doce com vegetais.',
            'preco' => 34.90,
            'patch_foto' => 'cardapiositens/Japchae.png',
        ]);

        // Itens de cardápio para Restaurante Italiano
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Spaghetti Carbonara',
            'descricao' => 'Spaghetti com molho carbonara.',
            'preco' => 39.90,
            'patch_foto' => 'cardapiositens/Spaghetti.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Lasagna',
            'descricao' => 'Lasagna de carne ao molho bolonhesa.',
            'preco' => 44.90,
            'patch_foto' => 'cardapiositens/Lasagna.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Risotto de Funghi',
            'descricao' => 'Risotto cremoso de cogumelos.',
            'preco' => 49.90,
            'patch_foto' => 'cardapiositens/Risotto.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Bruschetta',
            'descricao' => 'Torradas com tomate e manjericão.',
            'preco' => 19.90,
            'patch_foto' => 'cardapiositens/Bruschetta.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'd63125ff-ca7e-45ef-9ca5-1a1ec5ed7075',
            'nome' => 'Tiramisu',
            'descricao' => 'Sobremesa italiana de café.',
            'preco' => 24.90,
            'patch_foto' => 'cardapiositens/Tiramisu.png',
        ]);

        // Itens de cardápio para Restaurante Mexicano
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'e731c5d0-ea32-4cfa-8c8d-8fcbe690c9cd',
            'nome' => 'Tacos',
            'descricao' => 'Tacos crocantes com carne e vegetais.',
            'preco' => 29.90,
            'patch_foto' => 'cardapiositens/Tacos.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'e731c5d0-ea32-4cfa-8c8d-8fcbe690c9cd',
            'nome' => 'Guacamole',
            'descricao' => 'Creme de abacate com temperos.',
            'preco' => 14.90,
            'patch_foto' => 'cardapiositens/Guacamole.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'e731c5d0-ea32-4cfa-8c8d-8fcbe690c9cd',
            'nome' => 'Enchiladas',
            'descricao' => 'Tortillas recheadas com carne e molho.',
            'preco' => 34.90,
            'patch_foto' => 'cardapiositens/Enchiladas.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'e731c5d0-ea32-4cfa-8c8d-8fcbe690c9cd',
            'nome' => 'Nachos',
            'descricao' => 'Nachos com queijo e jalapeños.',
            'preco' => 24.90,
            'patch_foto' => 'cardapiositens/Nachos.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'e731c5d0-ea32-4cfa-8c8d-8fcbe690c9cd',
            'nome' => 'Churros',
            'descricao' => 'Churros com doce de leite.',
            'preco' => 19.90,
            'patch_foto' => 'cardapiositens/Churros.png',
        ]);

        // Itens de cardápio para Restaurante Francês
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'f841b6c0-0a1d-4b19-8c7f-9b2b1f4e9e5f',
            'nome' => 'Coq au Vin',
            'descricao' => 'Frango ao vinho tinto.',
            'preco' => 49.90,
            'patch_foto' => 'cardapiositens/Coq.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'f841b6c0-0a1d-4b19-8c7f-9b2b1f4e9e5f',
            'nome' => 'Quiche Lorraine',
            'descricao' => 'Quiche de bacon e queijo.',
            'preco' => 29.90,
            'patch_foto' => 'cardapiositens/Quiche.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'f841b6c0-0a1d-4b19-8c7f-9b2b1f4e9e5f',
            'nome' => 'Bouillabaisse',
            'descricao' => 'Sopa de peixe e frutos do mar.',
            'preco' => 59.90,
            'patch_foto' => 'cardapiositens/Bouillabaisse.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'f841b6c0-0a1d-4b19-8c7f-9b2b1f4e9e5f',
            'nome' => 'Ratatouille',
            'descricao' => 'Legumes assados ao estilo provençal.',
            'preco' => 24.90,
            'patch_foto' => 'cardapiositens/Ratatouille.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => 'f841b6c0-0a1d-4b19-8c7f-9b2b1f4e9e5f',
            'nome' => 'Crème Brûlée',
            'descricao' => 'Sobremesa de creme com caramelo.',
            'preco' => 19.90,
            'patch_foto' => 'cardapiositens/Creme.png',
        ]);

        // Itens de cardápio para Restaurante Tailandês
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '07234abc-d456-4ef9-a789-0b1c2d345678',
            'nome' => 'Pad Thai',
            'descricao' => 'Macarrão tailandês com camarão.',
            'preco' => 39.90,
            'patch_foto' => 'cardapiositens/Pad.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '07234abc-d456-4ef9-a789-0b1c2d345678',
            'nome' => 'Tom Yum',
            'descricao' => 'Sopa picante de camarão.',
            'preco' => 29.90,
            'patch_foto' => 'cardapiositens/Tom.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '07234abc-d456-4ef9-a789-0b1c2d345678',
            'nome' => 'Green Curry',
            'descricao' => 'Curry verde com frango.',
            'preco' => 34.90,
            'patch_foto' => 'cardapiositens/Green.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '07234abc-d456-4ef9-a789-0b1c2d345678',
            'nome' => 'Spring Rolls',
            'descricao' => 'Rolinho primavera frito.',
            'preco' => 19.90,
            'patch_foto' => 'cardapiositens/Spring.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '07234abc-d456-4ef9-a789-0b1c2d345678',
            'nome' => 'Mango Sticky Rice',
            'descricao' => 'Arroz doce com manga.',
            'preco' => 24.90,
            'patch_foto' => 'cardapiositens/Mango.png',
        ]);

        // Itens de cardápio para Restaurante Indiano
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '18245bcd-e567-4f89-b123-0c1d2e345678',
            'nome' => 'Chicken Tikka Masala',
            'descricao' => 'Frango ao molho tikka masala.',
            'preco' => 44.90,
            'patch_foto' => 'cardapiositens/Chicken.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '18245bcd-e567-4f89-b123-0c1d2e345678',
            'nome' => 'Naan',
            'descricao' => 'Pão naan tradicional.',
            'preco' => 9.90,
            'patch_foto' => 'cardapiositens/Naan.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '18245bcd-e567-4f89-b123-0c1d2e345678',
            'nome' => 'Samosa',
            'descricao' => 'Pastel frito recheado.',
            'preco' => 14.90,
            'patch_foto' => 'cardapiositens/Samosa.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '18245bcd-e567-4f89-b123-0c1d2e345678',
            'nome' => 'Biryani',
            'descricao' => 'Arroz temperado com carne.',
            'preco' => 34.90,
            'patch_foto' => 'cardapiositens/Biryani.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '18245bcd-e567-4f89-b123-0c1d2e345678',
            'nome' => 'Gulab Jamun',
            'descricao' => 'Doce de leite frito.',
            'preco' => 19.90,
            'patch_foto' => 'cardapiositens/Gulab.png',
        ]);

        // Itens de cardápio para Restaurante Brasileiro
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '29256cde-f678-40ba-c234-1d2e3f456789',
            'nome' => 'Churrasco',
            'descricao' => 'Churrasco brasileiro com acompanhamentos.',
            'preco' => 49.90,
            'patch_foto' => 'cardapiositens/Churrasco.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '29256cde-f678-40ba-c234-1d2e3f456789',
            'nome' => 'Moqueca',
            'descricao' => 'Moqueca de peixe e camarão.',
            'preco' => 39.90,
            'patch_foto' => 'cardapiositens/Moqueca.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '29256cde-f678-40ba-c234-1d2e3f456789',
            'nome' => 'Acarajé',
            'descricao' => 'Bolinhos de feijão com camarão.',
            'preco' => 24.90,
            'patch_foto' => 'cardapiositens/Acaraje.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '29256cde-f678-40ba-c234-1d2e3f456789',
            'nome' => 'Picanha',
            'descricao' => 'Picanha grelhada.',
            'preco' => 44.90,
            'patch_foto' => 'cardapiositens/Picanha.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '29256cde-f678-40ba-c234-1d2e3f456789',
            'nome' => 'Brigadeiro',
            'descricao' => 'Doce de chocolate brasileiro.',
            'preco' => 9.90,
            'patch_foto' => 'cardapiositens/Brigadeiro.png',
        ]);

        // Itens de cardápio para Restaurante Árabe
        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '3a367def-0789-41cb-d345-2e4f56789012',
            'nome' => 'Kibe',
            'descricao' => 'Bolinhos de carne com trigo.',
            'preco' => 19.90,
            'patch_foto' => 'cardapiositens/Kibe.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '3a367def-0789-41cb-d345-2e4f56789012',
            'nome' => 'Esfiha',
            'descricao' => 'Esfihas abertas e fechadas.',
            'preco' => 14.90,
            'patch_foto' => 'cardapiositens/Esfiha.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '3a367def-0789-41cb-d345-2e4f56789012',
            'nome' => 'Tabule',
            'descricao' => 'Salada de trigo com vegetais.',
            'preco' => 24.90,
            'patch_foto' => 'cardapiositens/Tabule.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '3a367def-0789-41cb-d345-2e4f56789012',
            'nome' => 'Homus',
            'descricao' => 'Pasta de grão-de-bico.',
            'preco' => 19.90,
            'patch_foto' => 'cardapiositens/Homus.png',
        ]);

        Cardapio::create([
            'id' => (string) Str::uuid(),
            'restaurante_id' => '3a367def-0789-41cb-d345-2e4f56789012',
            'nome' => 'Baklava',
            'descricao' => 'Doce de massa folhada com nozes.',
            'preco' => 29.90,
            'patch_foto' => 'cardapiositens/Baklava.png',
        ]);

    }
}

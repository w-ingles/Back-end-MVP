<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestauranteRequest;
use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RestauranteController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Traz todos os restaurantes junto com seus cardápios
        $filtroGeral = $request->input('filtro');

        $restaurantes = Restaurante::with('cardapios')
            ->when($filtroGeral, function($query, $filtroGeral) {
                return $query->where('nome', 'like', '%' . $filtroGeral . '%')
                    ->orWhereHas('cardapios', function($query) use ($filtroGeral) {
                        $query->where('descricao', 'like', '%' . $filtroGeral . '%');
                    });
            })->get();

        //return response()->json($restaurantes->toSql(), 200);

        return response()->json($restaurantes, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Este método não é usado em APIs RESTful
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RestauranteRequest $request)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('foto_restaurante')) {

                $uuid = Str::uuid()->toString();

                $filePath = "/imgs/restaurante/{$uuid}.png";


                $request->file('foto_restaurante')->move(public_path('imgs/restaurante'), "{$uuid}.png");//movendo foto para public

                // Adiciona o caminho da foto ao request
                $request->merge(['patch_foto' => $filePath]);
            }


            $restaurante = Restaurante::create($request->all());

            DB::commit();

            return response()->json([
                'message' => 'Restaurante criado com sucesso!',
                'data' => $restaurante
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => 'Erro ao criar restaurante.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra o restaurante pelo ID e carrega seus cardápios e proprietário
        $restaurante = Restaurante::with('cardapios', 'proprietario')->findOrFail($id);
        return response()->json($restaurante, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Este método não é usado em APIs RESTful
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RestauranteRequest $request, string $id)
    {

        DB::beginTransaction();

        try {

            $restaurante = Restaurante::findOrFail($id);

            if ($request->hasFile('foto_restaurante')) {


                $uuid = Str::uuid()->toString();

                $filePath = "/imgs/restaurante/{$uuid}.png";

                $request->file('foto_restaurante')->move(public_path('imgs/restaurante'), "{$uuid}.png");

                $request->merge(['patch_foto' => $filePath]);

                // Remove a foto antiga se existir
                if ($restaurante->patch_foto && file_exists(public_path($restaurante->patch_foto))) {
                    unlink(public_path($restaurante->patch_foto));
                }
            }

            // Atualiza o restaurante com os dados do request
            $restaurante->update($request->all());

            // Confirma a transação
            DB::commit();

            return response()->json(['message' => 'Restaurante atualizado com sucesso!', 'data' => $restaurante], 200);

        } catch (\Exception $e) {
            // Reverte a transação em caso de erro
            DB::rollBack();

            return response()->json(['message' => 'Erro ao atualizar restaurante.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra o restaurante pelo ID
        $restaurante = Restaurante::findOrFail($id);

        // Exclui o restaurante (e os cardápios)
        $restaurante->delete();

        return response()->json([
            'message' => 'Restaurante excluído com sucesso!'
        ], 204);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestauranteRequest;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Traz todos os restaurantes junto com seus cardápios
        $restaurantes = Restaurante::with('cardapios','proprietario')->get();
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


        $restaurante = Restaurante::create($request->all());

        return response()->json([
            'message' => 'Restaurante criado com sucesso!',
            'data' => $restaurante
        ], 201);

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
    public function update(Request $request, string $id)
    {

        // Encontra o restaurante pelo ID
        $restaurante = Restaurante::findOrFail($id);


        // Atualiza o restaurante
        $restaurante->update($request->all());

        return response()->json([
            'message' => 'Restaurante atualizado com sucesso!',
            'data' => $restaurante
        ], 200);
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

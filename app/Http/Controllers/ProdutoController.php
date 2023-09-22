<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $produto = new Produto($request->all());
        $produto->save();
        return response()->json($produto, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json(['mensagem' => 'Produto não encontrado'], 404);
        }
        return response()->json($produto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $produto = Produto::find($id);
        if (!$produto) {
            return response()->json(['mensagem' => 'Produto não encontrado'], 404);
        }

        $produto->update($request->toArray());

        return response()->json($produto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Produto::find($id)->delete();

        return response()->noContent();
    }
}

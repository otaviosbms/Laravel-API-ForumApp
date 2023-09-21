<?php

namespace App\Http\Controllers;

use App\Models\Exemplo;
use Illuminate\Http\Request;

class ExemploController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exemplos = Exemplo::all();
        return response()->json($exemplos);
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

        $exemplo = new Exemplo($request->all());
        $exemplo->save();
        return response()->json($exemplo, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $exemplo = Exemplo::find($id);
        if (!$exemplo) {
            return response()->json(['mensagem' => 'Exemplo não encontrado'], 404);
        }
        return response()->json($exemplo);
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
        $exemplo = Exemplo::find($id);
        if (!$exemplo) {
            return response()->json(['mensagem' => 'Exemplo não encontrado'], 404);
        }

        $exemplo->fill($request->all());
        $exemplo->save();

        return response()->json($exemplo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Exemplo::find($id)->delete();

        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefeicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \App\Refeicao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Refeicao $refeicao)
    {
        return $refeicao;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Refeicao $refeicao)
    {
        if (!$refeicao->delete()) {
            return response()->json(['error' => 'Erro ao excluir refeição']);
        }
        return response()->json(['success' => 'Refeição removida com sucesso']);
    }

    /**
     * Retorna os alimentos de determinada refeição
     *
     * @param \App\Refeicao $refeicao
     * @author Victor Marciano
     */
    public function getAlimentos(\App\Refeicao $refeicao)
    {
        return $refeicao->alimento;
    }
}

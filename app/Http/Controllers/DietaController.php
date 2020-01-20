<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class DietaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \App\Dieta::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!\App\Dieta::create($request->all())) {
            return response()->json(['error' => 'Erro ao inserir dieta']);
        }
        return response()->json(['success' => 'Dieta inserida com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Dieta $dietum)
    {
        return $dietum;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Dieta $dietum)
    {
        if (!$dietum->update($request->all())) {
            return response()->json(['error' => 'Erro ao atualizar a dieta']);
        }
        return response()->json(['success' => 'Dieta atualizada com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Dieta $dietum)
    {
        if (!$dietum->delete()) {
            return response()->json(['error' => 'Erro ao remover a dieta selecionada']);
        }
        return response()->json(['success' => 'Dieta removida com sucesso']);
    }

    public function pdf(int $id)
    {
        $dieta = \App\Dieta::getDietaDataById($id);
        $dieta->refeicao = \App\Refeicao::getRefeicoesByDieta($id);
        for ($i = 1; $i <= count($dieta->refeicao); $i++) {
            $refeicaoModel = \App\Refeicao::find($dieta->refeicao[$i - 1]->id);
            $dieta->refeicao[$i - 1]->alimentos = $refeicaoModel->alimento()->get();
        }
        // var_dump($dieta->refeicao[0]->alimentos);
        // die();
        $pdf = PDF::loadView('pdf.dieta', compact('dieta'));
        return $pdf->download('dieta.pdf');
    }
}

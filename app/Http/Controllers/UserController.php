<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \App\User::all();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\User $user)
    {
        if (!$user->update($request->all())) {
            return response()->json(['error' => 'Erro ao atualizar os dados do usuário']);
        }
        return response()->json(['success' => 'Usuário atualizado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\User $user)
    {
        if (!$user->delete()) {
            return response()->json(['error' => 'Erro ao excluir usuário'], 400);
        }
        return response()->json(['success' => 'Usuário removido com sucesso'], 200);
    }
    
    /**
     * Retorna o usuário logado
     *
     * @return \Illuminate\Http\Response
     */
    public function authUser()
    {        
        return auth()->user();
    }

    /**
     * Obtem as dietas do usuário informado
     *
     * @param \App\User $user
     * @author Victor Marciano
     */
    public function getDietas(\App\User $user)
    {
        return $user->dieta()->get();
    }
}

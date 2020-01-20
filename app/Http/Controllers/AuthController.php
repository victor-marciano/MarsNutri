<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($validatedData)) {
            return response()->json(['success' => 'Usuário autenticado com sucesso']);        
        }
        return response()->json(['error' => 'Email ou senha incorretos']);
    }

    /**
     * Registra um usuário
     *
     * @param \Illuminate\Http\Request $request
     * @author Victor Marciano
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);

        if (!\App\User::create($validatedData)) {
            return response()->json(['error' => 'Erro ao cadastrar usuário']);
        }
        return response()->json(['success' => 'Usuário cadastrado com sucesso']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}

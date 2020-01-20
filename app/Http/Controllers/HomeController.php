<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    
    public function calculadora()
    {
        return view('calculadora');
    }
    
    public function feed()
    {
        return view('index');
    }
    
    public function perfil()
    {
        return view('profile');
    }
    
    public function dieta()
    {
        return view('dieta');
    }
    
    public function faleConosco()
    {
        return view('faleConosco');
    }
}

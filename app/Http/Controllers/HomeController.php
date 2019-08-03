<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('home');
    }
    public function listaProveedores()
    {
        return view('lista-proveedores');
    }
    public function resultadoBusqueda()
    {
        return view('resultado-busqueda');
    }
    public function perfil()
    {
        return view('perfil');
    }

}

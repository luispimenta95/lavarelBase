<?php

namespace App\Http\Controllers;

use \App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuario = Usuario::get();
        return view('usuarios.list', ['usuarios' => $usuario]);
    }
    public function cadastrarUsuarios()
    {
        return view('usuarios.form');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index', ['vector_usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario;
        $usuarios->nombre = $request->input('nombre');
        $usuarios->correo = $request->input('correo');
        $usuarios->ci = $request->input('ci');
        $usuarios->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuarioActual = Usuario::findOrFail(intval($id));
        return view('usuario.edit', ['usuarioActual' => $usuarioActual]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarioActual = Usuario::findOrFail(intval($id));
        $usuarioActual->nombre = $request->input('nombre');
        $usuarioActual->correo = $request->input('correo');
        $usuarioActual->ci = $request->input('ci');
        $usuarioActual->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarioActual = Usuario::findOrFail(intval($id));
        $usuarioActual->delete();
        return redirect()->route('usuarios.index');
    }
}

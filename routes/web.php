<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return 'Hello World 69';
});

Route::get('/usuarios', function () {
    $usuarios = Usuario::all();
    return view('usuario.index', ['vector_usuarios' => $usuarios]);
})->name("usuarios.index");

Route::get('/usuarios/create', function () {
    return view('usuario.create');
});

Route::post('/usuarios', function (Request $request) {
    $usuarios = new Usuario;
    $usuarios->nombre = $request->input('nombre');
    $usuarios->correo = $request->input('correo');
    $usuarios->ci = $request->input('ci');//intval($ci);
    $usuarios->save();
    return redirect()->route('usuarios.index');
});

Route::get('/usuarios/{id}', function (string $id) {
    return Usuario::findOrFail(intval($id));
});



Route::get('/vista/usuarios', function(){
    return view('usuario');
});

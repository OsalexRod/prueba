<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('usuario', ['vector_usuarios' => $usuarios]);
});

Route::get('/usuarios/{id}', function (string $id) {
    return Usuario::findOrFail(intval($id));
});

Route::get('/usuarios/{nombre}/{correo}/{ci}', function (string $nombre, string $correo, string $ci) {
    $usuarios = new Usuario;
    $usuarios->nombre = $nombre;
    $usuarios->correo = $correo;
    $usuarios->ci = intval($ci);
    $usuarios->save();
    return "Correcto!!!";
});

Route::get('/vista/usuarios', function(){
    return view('usuario');
});

<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;
use App\Http\Controllers\Products;

Route::get('/criar-produtos',[Products::class, 'create']);
Route::get('/editar-produtos',[Products::class, 'update']);
Route::get('/', [Products::class, 'index']);
Route::get('/events/create',[EventController::class,'create']);
Route::get('/contatos/contatos',function (){
    return view('/contatos/contatos');
});

// Route::get('/produtos', function(){
//     $busca = request('search');

//     return view('/products',['busca' => $busca]);
// });

// Route::get('/produtos/{id?}', function($id = null){
//     return view('/products',['id' => $id]);
// });


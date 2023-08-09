<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\Products;
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


Route::get('/criar-produtos',[Products::class, 'create']);
Route::get('/editar-produtos',[Products::class, 'update']);
Route::get('/', [Products::class, 'index']);
Route::get('/login',[ClientsController::class, 'create']);
Route::get('/user',[ClientsController::class,'index']);
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


<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/*minhas rotas*/
Route::get('/produto', function () {
    $produtos = App\Produto::all();
    return view('produtos', compact('produtos'));
});

Route::get('produto/{id}', function($id){
    $produto = App\Produto::where('id', '=', $id)->firstOrFail();
    return view('produtoSelecionado', compact('produto'));
});
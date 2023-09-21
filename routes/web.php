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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


/*minhas rotas*/
Route::get('/', function () {
    $produtos = App\Produto::where('retirado', '<>', true)->get();
    return view('welcome', compact('produtos'));
});

Route::get('produto/{id}', function($id){
    $produto = App\Produto::where('id', '=', $id)->firstOrFail();
    return view('produtoSelecionado', compact('produto'));
});

Route::get('/localRetirada', function(){
    return view('localRetirada');
});


Route::get('/quemDesenvolveu', function(){
    return view('quemDesenvolveu');
});


Route::get('/itensRetirados', function(){
    $produtos = App\Produto::where('retirado', '=', true)->get();
    return view('welcome', compact('produtos'));
});
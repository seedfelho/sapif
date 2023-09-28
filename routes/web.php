<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
    $descricao = "";
    $action = "/";
    return view('welcome', compact('produtos', 'descricao', 'action'));
});

Route::post('/', function (Request $request) {
    $descricao = $request->input('descricao');
    $action = "/";
    $produtos = App\Produto::where('retirado', '<>', true)->where('descricao', 'like',  "%".$descricao."%")->get();
    return view('welcome', compact('produtos', 'descricao', 'action'));
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
    $descricao = "";
    $action = "/itensRetirados";
    return view('welcome', compact('produtos', 'descricao', 'action'));
});

Route::post('/itensRetirados', function (Request $request) {
    $descricao = $request->input('descricao');
    $action = "/itensRetirados";
    $produtos = App\Produto::where('retirado', '=', true)->where('descricao', 'like',  "%".$descricao."%")->get();
    return view('welcome', compact('produtos', 'descricao', 'action'));
});
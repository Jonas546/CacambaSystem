<?php

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

Auth::routes();

Route::get('/', function () {
    return view('home');
})->middleware(['auth.role']);


// Rotas Caçambas

Route::get('/Gerenciar_Cacamba', function() {
	return 'Gerenciar Caçamba';
});

//Route::get('Teste/{var?}', 'CacambaController@Teste');

Route::resource('Gerenciar_Cacamba', 'CacambaController');

Route::post('/store', 'CacambaController@store');

Route::post('/pagination', 'CacambaController@pagination');

Route::post('/update', 'CacambaController@update');

Route::get('/show/{id}', 'CacambaController@show');

Route::delete('/destroy/{id}', 'CacambaController@destroy');

// Rotas Funcionário

Route::resource('Gerenciar_Funcionarios', 'FuncionarioController');

Route::post('/fc_store', 'FuncionarioController@store');

Route::get('/fc_get/{id}', 'FuncionarioController@find');

Route::post('/fc_update', 'FuncionarioController@update');

Route::post('/fc_del', 'FuncionarioController@destroy');

Route::get('/fc_getname/{name}', 'FuncionarioController@find_name');

//Rotas Locação

Route::resource('Gerenciar_Locacao', 'LocacaoController');

Route::get('/nota/{aux}', 'LocacaoController@getNota');

Route::get('/notas/{id}', 'LocacaoController@getNota_id');

Route::get('/nota_teste', 'LocacaoController@Teste');

Route::post('/lc_store', 'LocacaoController@store');

Route::get('/get_nota/{aux}', 'LocacaoController@dataNota');

Route::get('/lc_get/{id}', 'LocacaoController@show');

Route::post('/lc_update', 'LocacaoController@update');

Route::post('/lc_update_fin', 'LocacaoController@update_fin');

//Rotas Historico

Route::resource('Historico', 'HistoricoController');

Route::get('/lc_gets/{id}', 'HistoricoController@show');

Route::get('/delete/{id}', 'HistoricoController@destroy');

//Rotas Financeiro

Route::resource('Financeiro', 'FinanceiroController');

Route::get('/Financeiro_despesas', 'FinanceiroController@despesas');

Route::get('/Financeiro_receitas', 'FinanceiroController@receitas');

Route::post('/gt_store', 'FinanceiroController@store');

Route::post('/get_gastos', 'FinanceiroController@show_gastos');

Route::post('/get_receitas', 'FinanceiroController@show_receitas');

Route::get('/teste_gt', 'FinanceiroController@Teste');

Route::post('/rel_gastos', 'FinanceiroController@getRelGastos');

Route::post('/rel_receitas', 'FinanceiroController@getRelReceitas');

Route::get('/del_gastos/{id}', 'FinanceiroController@destroy');

//Rotas de Usuário

Route::get('/register', 'Auth\RegisterController@register');

Route::get('/change', 'Auth\RegisterController@change');

Route::post('/user_store', 'Auth\RegisterController@store');

Route::post('/user_change', 'Auth\RegisterController@update');

//Rotas de Login

Route::get('/login', 'Auth\LoginController@login');

Route::post('/auth', 'Auth\LoginController@authenticate');

Route::get('/logout', 'Auth\LoginController@logout');


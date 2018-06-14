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

Route::post('logar', 'LoginController@entrar')->name('logar');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::post('/medicamneto','CadMedController@cadastrar');


Route::get('/','LoginController@Login');
Route::get('/home','PrincipalController@principal');
Route::get('/medicamento','CadMedController@cadmedicamento');
Route::get('/funcionario','CadFuncionarioController@cadfun');
Route::get('/cliente','CadClienteOficialController@cadclienteof');
Route::get('/gerente','CadGerenteController@cadgerente');
Route::get('/atendimento','AtendiController@atendimento_on');
Route::post('/logar', 'PrincipalController@principal')->name('logar');
   
/*
Route::get('/', function () {
    return view('welcome');
});
*/
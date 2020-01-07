<?php
use GuzzleHttp\Client;
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
//GET's//
Route::get('/negocios', ['uses'=>'PipeController@getDeals', 'as' =>'PipeController.getDeals']);
Route::get('/negocios/criar', ['uses' => 'PipeController@criarDeal', 'as' =>'PipeController.criar']);
Route::get('/negocios/{id}', ['uses' => 'PipeController@getDeal', 'as' => 'PipeController.getDeal']);
Route::get('/negocios/export/excel', ['uses' => 'PipeController@export', 'as' => 'PipeController.export']);
Route::get('/ativ', ['uses' => 'PipeController@getAtiv', 'as' =>'PipeController.getAtiv']);

Route::get('/teste',  ['uses' => 'PipeController@export', 'as' => 'PipeController.export']);


//POST'S//
Route::post('/negocios/criar/salvar', ['uses' => 'PipeController@salvarDeal' , 'as' => 'PipeController.salvarDeal']);
Route::post('/negocios/addAtividade/salvar', ['uses' => 'PipeController@addAtividade' , 'as' => 'PipeController.addAtiv']);



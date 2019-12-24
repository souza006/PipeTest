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

Route::get('/teste', ['uses'=>'PipeController@getDeals', 'as' =>'PipeController.getDeals']);


/*Route::get('/negocios', function() {
	$client = new Client();

	$response = $client->request('GET', 'https://teste123-sandbox.pipedrive.com/v1/deals?api_token=a627e863cd149b767d5d9217aa57b2008ad09209');
	$statusCode = $response->getStatusCode();
	$body = $response->getBody()->getContents();

	return $body;
});*/

Route::get('/negocios/criar', ['uses' => 'PipeController@criarDeal', 'as' =>'PipeController.criar']);
Route::post('/negocios/criar/salvar', ['uses' => 'PipeController@salvarDeal' , 'as' => 'PipeController.salvar']);
/*
Route::post('/negocios/criar/salar', ['uses' => 'PipeController@salvarDeal' , 'as' => 'pipeController.salvar'] {

	$client = new Client();
        $res = $client->request('POST', 'https://teste123-sandbox.pipedrive.com/v1/deals?api_token=a627e863cd149b767d5d9217aa57b2008ad09209', [
            'deal' => [
                'title' => 'testeAPI',
                'org_id' => 'testeAPI12',
            ]
        ]);
});

Route::get('/negocios/create', function(){})
*/



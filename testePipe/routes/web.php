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


Route::get('/negocios', function() {
	$client = new Client();

	$response = $client->request('GET', 'https://teste123-sandbox.pipedrive.com/v1/deals?api_token=a627e863cd149b767d5d9217aa57b2008ad09209');
	$statusCode = $response->getStatusCode();
	$body = $response->getBody()->getContents();

	return $body;
});

Route::post('/negocios/add', function() {

	$client = new Client();
        $res = $client->request('POST', 'https://teste123-sandbox.pipedrive.com/v1/deals?api_token=a627e863cd149b767d5d9217aa57b2008ad09209', [
            'form_params' => [
                'title' => 'testeAPI',
                'org_id' => 'testeAPI12',
            ]
        ]);
	 	echo $res->getStatusCode();
        // 200
        echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
        echo $res->getBody();
        // {"type":"User"...'
});


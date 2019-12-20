<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Deals;

class PipeController extends Controller
{

	/*
	*
	* @param Request $request
	* @return json
	*
	*/
    public function index(){
            $client = new Client();

	$response = $client->request('GET', 'https://teste123-sandbox.pipedrive.com/v1/deals?api_token=a627e863cd149b767d5d9217aa57b2008ad09209');
	$statusCode = $response->getStatusCode();
	$body = $response->getBody()->getContents();

	return $body;
        }


        /*
        public function storeTask(Request $request){
        	dd($request);
        }
        */


        public function criarDeal(){
        return view('criar_negocio');
    }

    public function salvarDeal(Request $request){

    	/*
    	    	$envio = new Client();
    	$envio->title = $request->title;
    	$envio->value = $request->value;
    	*/
    	$client = new Client(['headers' => ['Content-Type' => 'application/json',
                                                'apikey'=> 'a627e863cd149b767d5d9217aa57b2008ad09209',
                                                'debug' => true
                                                ]
                                ]);
    	dd($client);
        $res = $client->request('POST', 'https://teste123-sandbox.pipedrive.com/v1/deals?api_token=a627e863cd149b767d5d9217aa57b2008ad09209', [
            'deal' => [
                'title' => $request->title,
                'org_id' => $request->org_id,
            ]
        ]);

        /*dd($request);*/

    	$request->save();


    }

}



        /*echo $res->getStatusCode();
        // 200
        echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
        echo $res->getBody();
        // {"type":"User"...'
        */
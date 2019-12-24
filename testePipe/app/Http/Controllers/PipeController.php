<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Deal;
use Illuminate\Database\Eloquent\Model;


class PipeController extends Controller
{

	/*
	*
	* @param Request $request
	* @return json
	*
	*/
    public function getDeals(){
           $api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';


			$company_domain = 'teste123';
 
			
			$url = 'https://'.$company_domain.'.pipedrive.com/v1/deals?api_token=' . $api_token;
			 
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$output = curl_exec($ch);
			curl_close($ch);
			 
			
			$result = json_decode($output, true);

			
			
			/*
			if (empty($result['data'])) {
			    exit('No deals created yet');
			}

			
			foreach ($result['data'] as $key => $deal) {
			    $deal_title = $deal['title'];

			    return view('deals', compact('deals'));			
			}


			foreach ($result['data'] as $key => $deal){
		   $deal_id = $deal['id'];
			echo '#' . ($key + 1) . ': ' . $deal_id;

			}*/
    }
    public function criarDeal(){
        return view('criar_negocio');
    }

    public function salvarDeal(Request $request){

		$api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';
		$deal = array(
		  'title' => $request->title,
		  'org_id' => $request->org_id,
		  'value' => $request->value
		);
		 
		$url = 'https://companydomain.pipedrive.com/v1/deals?api_token=' . $api_token;
		 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $deal);
		 
		 
		$output = curl_exec($ch);
		curl_close($ch);
		 

		$result = json_decode($output, true);
		
		if (!empty($result['data']['id'])) {
		   echo 'Deal was added successfully!';
		}
    }

}

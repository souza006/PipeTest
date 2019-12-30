<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{

	$api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';


			$company_domain = 'teste123';
 
			
			$url = 'https://'.$company_domain.'.pipedrive.com/v1/deals?api_token=' . $api_token;
			 
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$output = curl_exec($ch);
			curl_close($ch);
			 
			
			$request = json_decode($output, true);

			$dados = $request['data'];


    public $table = 'Deal';

		$Deal->title = $dados[0]['title'];
		$Deal->value= $dados[0]['value'];
		$Deal->org_id= $dados[0]['org_id'];
		$Deal->currency= $dados[0]['currency']; //nem sempre os campos tem o mesmo nome
		$Deal->user_id = $dados[0]['user_id'];
		$Deal->person_id = $dados[0]['person_id']

}

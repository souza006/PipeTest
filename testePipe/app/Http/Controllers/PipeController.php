<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Deal;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DealsExport;



class PipeController extends Controller
{

	/*
	*
	* @param Request $request
	* @return json
	*
	*/
    public function getDeals(Request $request){
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

        	return view('deals', compact('dados'));



    }


    public function criarDeal(){
        	return view('criar_negocio');
    }

    public function salvarDeal(Request $request){

		$api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';
			$deal = array(
				'title' => $request->title,
				'value' => $request->value,
				'org_id' => $request->org_id,
				'stage_id' => $request->stage,
				/**'currency' => $request->currency,
				'user_id' => $request->user_id,
				'person_id' =>$request->person_id*/
				'7668999bc0ffd7fbd10db12359a84a5db7a66a62' => $request->criador,
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
		   		echo "<script> alert('Negócio salvo com sucesso.');</script>";
			}

    	}

   public function getDeal($deal_id){
	   
   			$client = new Client();

		    $api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';
		    $company_domain = 'teste123';
		    
			$response = $client->request('GET', 'https://' . $company_domain . '.pipedrive.com/v1/deals/' . $deal_id . '?api_token=' . $api_token);
			$statusCode = $response->getStatusCode();
			$body = $response->getBody()->getContents();
			
			$result = json_decode($body, true);
			

			$dados = $result['data'];

			$deal_id = $dados['id'];

			dd($dados);

			$api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';
    		$company_domain = 'teste123';
    		$url = 'https://' . $company_domain . '.pipedrive.com/v1/deals/' . $deal_id . '?api_token=' . $api_token;

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  
		  
			$output = curl_exec($ch);
			curl_close($ch);

		
			$result2 = json_decode($output, true);


			$dados2 = $request['data'];

			return view('dealDetail', compact('dados'));


		}
	
	public function getAtiv(){
		return view('atividades');
	}

    public function addAtividade(Request $request){

    	$api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';
			$data = array(
				'subject' => $request->assunto,
    			'type' => $request->tipo,
    			'deal_id' => $request->deal_id
			);
		 
		$url = 'https://companydomain.pipedrive.com/v1/activities?api_token=' . $api_token;
		 
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		 
		 
		$output = curl_exec($ch);
			curl_close($ch);
		 

		$result = json_decode($output, true);
		
			if (!empty($result['data']['id'])) {
		   		echo "<script> alert('Atividade criada com sucesso.');</script>";
   		 }
   	}

   	public function addOrg(Request $request){
 
		$api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';
 
		$data = array(
  			'name' => $request->name,
  			'owner_id' => $request->owner
		);
 
		$url = 'https://companydomain.pipedrive.com/v1/organizations?api_token=' . $api_token;
 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 

 
		$output = curl_exec($ch);
		curl_close($ch);

		$result = json_decode($output, true);
		 
		
		if (!empty($result['data']['id'])) {
		  echo "<script> alert('Negócio atualizado com sucesso.');</script>";
		}

		return redirect()->route('negocios');
   	}



   	public function export(){
   			dd("'teste' export");
   			/*
   			$api_token = 'a627e863cd149b767d5d9217aa57b2008ad09209';


			$company_domain = 'teste123';
 
			
			$url = 'https://'.$company_domain.'.pipedrive.com/v1/deals?api_token=' . $api_token;
			 
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$output = curl_exec($ch);
			curl_close($ch);
			 
			
			$result = json_decode($output, true);

			$dados = $result['data'];*/
   		 return Excel::download(new DealsExport, 'deals.xlsx');
   			
   	}

}

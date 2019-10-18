<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function homepage(){

    	$teste = "teste de titulo";

    	return view('welcome2', [
    		'title' => $teste
    	]);

    	/**echo 'tela de teste';
    	return view('welcome', ['title' => $v1]);**/
    }
/* login + view*/
    public function cadastro(){
    	echo "tela de cadastro";
    }

    public function fazerLogin(){
    	return view('user.login');
    }
}

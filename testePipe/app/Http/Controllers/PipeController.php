<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PipeController extends Controller
{

	/*
	*
	* @param Request $request
	* @return json
	*
	*/
    public function index(){
            return Deals::all();
        }


        public function storeTask(Request $request){
        	dd($request);
        }

}

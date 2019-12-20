<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Util\Post;

class ApiController extends Controller
{
   protected $post;

    public function __construct(Post $post)
    {
    	$this->post = $post;
    }

    public function index()
    {
    	// Get all the post
    	$posts = $this->post->all();

    	return view('someview', compact('posts'));
    }

    public function show($id)
    {
    	$post = $this->post->findById($id);

    	return view('someview', compact('post'));
    }

    public function saveApiData()
    {
        $client = new Client();
        $res = $client->request('POST', 'https://teste123-sandbox.pipedrive.com/v1/deals?api_token=a627e863cd149b767d5d9217aa57b2008ad09209', [
            'deal' => [
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
}
}

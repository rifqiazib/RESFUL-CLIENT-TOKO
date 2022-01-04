<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function guzzleGet(){
    $client = new \GuzzleHttp\Client();
    $request = $client->get('http://127.0.0.1:8000/api/produk/');
    $response = $request->getBody();
   
    dd($response);
}
}

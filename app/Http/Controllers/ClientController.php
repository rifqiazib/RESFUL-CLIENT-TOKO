<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function guzzleGet()
    {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get('http://localhost:3000/api/produk/');
            $body = $response->getBody();
            $body_array = json_decode($body);
            
            dd($body_array);
        } catch(\Exception $error) {
            return $error->getMessage();
        }
    }
}

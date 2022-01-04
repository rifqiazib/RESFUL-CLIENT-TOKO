<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function guzzleGet()
    {
        $data = [];
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get('http://localhost:3000/api/produk/');
            $body = $response->getBody();
            $body_array = json_decode($body);
            
            $data['list_produk'] = $body_array->data;
        } catch(\Exception $error) {
            return $error->getMessage();
        }

        return view('welcome', $data);
    }
}

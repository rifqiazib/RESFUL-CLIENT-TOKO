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
            $barang = json_decode($body);
            return view('produk.index', ['barang'=>$barang['data']]);
            //dd($body_array);
        } catch(\Exception $error) {
            return $error->getMessage();
        }
    }
}

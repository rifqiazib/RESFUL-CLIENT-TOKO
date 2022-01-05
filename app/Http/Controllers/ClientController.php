<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index(){
        return view('produk.home');
    }
    
    public function guzzleGet()
    {
        $data = [];
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get('http://localhost:3000/api/produk/');
            $body = $response->getBody();
            $body_array = json_decode($body);
            
            $data = $body_array->data;
            return view('produk.index', ['list_produk'=>$data]);
            //dd($data);
        } catch(\Exception $error) {
            return $error->getMessage();
        }

        return view('welcome', $data);
    }

    public function guzzlecreate(){
        return view('produk.create');
    }

    public function guzzlePost(Request $request)
    {
    $data = [];
    try{
        $client = new \GuzzleHttp\Client();
        $url = ('http://localhost:3000/api/produk/');
    
        $res = $client->request('POST', $url , [
            'form_params' => [
                'nama_produk' => $request->nama_produk,
                'jumlah_produk' => $request->jumlah_produk,
                'harga' => $request->harga
            ]
            ]);
        return view('produk.home');
        
        //dd($response);
        } catch (\Exception $error){
                return $error->getMessage();
        }
        return view('welcome', $data);
    }

    public function guzzleedit($id){
        $data = [];
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'http://localhost:3000/api/produk/'. $id);
            //$response = $client->get('http://localhost:3000/api/produk/2');
            $body = $response->getBody();
            $body_array = json_decode($body);
            
            $data = $body_array->data;
            return view('produk.edit', ['list_produk'=>$data]);
            //dd($data);
        } catch(\Exception $error) {
            return $error->getMessage();
        }
        return view('welcome', $data);
    }

    public function guzzleUpdate(Request $request, $id){
        $data = [];
    try{
        $client = new \GuzzleHttp\Client();
        $url = ('http://localhost:3000/api/produk/' . $id);
    
        $res = $client->request('PUT', $url , [
            'form_params' => [
                'nama_produk' => $request->nama_produk,
                'jumlah_produk' => $request->jumlah_produk,
                'harga' => $request->harga
            ]
            ]);
        return view('produk.home');
        
       // dd($response);
        } catch (\Exception $error){
                return $error->getMessage();
        }
        return view('welcome', $data);
    }

    public function guzzleDelete($id)
    {
    $data = [];
    try {
        $client = new \GuzzleHttp\Client();
        $url = ('http://localhost:3000/api/produk/' . $id);
        $response = $client->delete($url);
 
        
        
        return view('produk.home');
        //dd($data);
    } catch(\Exception $error) {
        return $error->getMessage();
    }

    return view('welcome', $data);
    }
}


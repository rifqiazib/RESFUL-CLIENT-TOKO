<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = Produk::all();
            return $this->sendResponse(false, 'Daftar produk yang tersedia', $data);
        } catch(\Exception $error) {
            return $this->sendResponse(true, $error->getMessage(), null);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'nama_produk'=>'required',
            'jumlah_produk'=>'required|numeric',
            'harga'=>'required|numeric'
        ]);

        try{
            $response = Produk::create($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response
            ]); 
        }catch (\Exception $x){
            return response()->json([
                'mesagges' => 'error',
                'errors' => $x->getMessage()
                ],422);
        }
            
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Produk::find($id);
            return $this->sendResponse(false, 'Daftar produk yang tersedia', $data);
        } catch(\Exception $error) {
            return $this->sendResponse(true, $error->getMessage(), null);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi=$request->validate([
            'nama_produk'=>'required',
            'jumlah_produk'=>'required|numeric',
            'harga'=>'required|numeric'
        ]);

        try{
            $response = Produk::find($id);
            $response->update($validasi);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $response
            ]); 
        }catch (\Exception $x){
            return response()->json([
                'mesagges' => 'error',
                'errors' => $x->getMessage()
                ],422);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $produk=Produk::find($id);
            $produk->delete();
            return response()->json([
                'success' => true,
                'message' => 'succes'
            ]);
        }catch(\Exception $x){
            return response()->json([
                'mesagges' => 'error',
                'errors' => $x->getMessage()
                ],422);
        }
    }
}

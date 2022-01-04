<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Produk::create([
            'nama_produk' => 'Chiki Balls',
            'jumlah_produk' => 20,
            'harga' => 20000,
        ]);
    }
}

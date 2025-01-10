<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        //
        $produks = [
            [
                'nama' => 'Cheetos',
                'deskripsi' => 'Kripik jagung gurih',
                'harga' => 3000.00,                 
            ],
            [
                'nama' => 'Beng-beng',
                'deskripsi' => 'Snack coklat',
                'harga' => 2000.00,                
            ],
            [
                'nama' => 'Milku',
                'deskripsi' => 'Minuman susu berkualitas',
                'harga' => 3500.00,                
            ],
            [
                'nama' => 'Taro',
                'deskripsi' => 'Snack cemilan mantap, 1 bungkus 10g',
                'harga' => 2000.00,                
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
}

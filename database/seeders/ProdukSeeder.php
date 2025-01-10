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
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
}

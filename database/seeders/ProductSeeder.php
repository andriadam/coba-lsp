<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Produk 1',
            'desc' => 'Produk dengan berat 1kg',
            'price' => 10000
        ]);
        Product::create([
            'name' => 'Produk 2',
            'desc' => 'Produk dengan berat 2kg',
            'price' => 20000
        ]);
        Product::create([
            'name' => 'Produk 3',
            'desc' => 'Produk dengan berat 3kg',
            'price' => 30000
        ]);
        Product::create([
            'name' => 'Produk 4',
            'desc' => 'Produk dengan berat 4kg',
            'price' => 40000
        ]);
    }
}

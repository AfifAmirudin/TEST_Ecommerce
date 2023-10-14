<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Promo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'pcode' => '010001',
            'name' => 'MIRANDA H.C N.BLACK 30.MC1',
            'harga' => 10000,
            'jumlah' => 200,
        ]);

        Customer::create([
            'cust_name' => 'paijo',
            'addres' => 'jl. Kutilang berkicau 12, jakarta barat',

        ]);

        Promo::create([
            'promo_code' => 'pm0-001',
            'pcode' => '010001',
            'diskon' => 1000,
        ]);
    }
}

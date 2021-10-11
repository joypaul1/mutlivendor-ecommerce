<?php

use App\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::create([
            'mobile' => '01234567891',
            'password' => Hash::make('s1234567'),
            'name' => 'Mr. Seller',
            'shop_name' => 'Test Shop',
            'slug' => 'test-shop'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Delivery;
use Illuminate\Support\Facades\Hash;

class DeliveryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Delivery::create([
            'name' => 'Delivery',
            'email' => 'delivery@test.com',
            'password' => Hash::make('123456789'),
            'image' => 'defaults/user.png',
        ]);
    }
}

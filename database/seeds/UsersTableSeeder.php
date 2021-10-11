<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'User',
            'email'         => 'user@test.com',
            'password'      => Hash::make('12345678joy/*'),
            'image'         => 'defaults/user.png',
            'division_id'   => 1, // Dhaka
            'city_id'       => 98, // North
            'post_code_id'  => 606, // Abul Hotel
            'status'        => 1, // Abul Hotel
        ]);
    }
}

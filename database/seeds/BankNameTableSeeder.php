<?php

use Illuminate\Database\Seeder;
use App\Models\BankInfo;

class BankNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankInfo::insert([
            [
                'id' => 1,
                'name' => 'Janata Bank Limited'
            ], [
                'id' => 2,
                'name' => 'Sonali Bank Limited'
            ], [
                'id' => 3,
                'name' => 'Rupali Bank Ltd'
            ], [
                'id' => 4,
                'name' => 'BASIC BANK'
            ], [
                'id' => 5,
                'name' => 'Agrani Bank Limited'
            ],[
                'id' => 6,
                'name' => 'Bangladesh Development Bank'
            ],
        ]);
    }
}

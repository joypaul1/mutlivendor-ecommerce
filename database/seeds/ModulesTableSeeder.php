<?php

use App\Module;
use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::insert([
            ['id' => 1, 'name' => 'Order'],
            ['id' => 2, 'name' => 'Transaction'],
            ['id' => 3, 'name' => 'Product'],
            ['id' => 4, 'name' => 'EConfig'],
            ['id' => 5, 'name' => 'Seller'],
            ['id' => 6, 'name' => 'Agent'],
            ['id' => 7, 'name' => 'Customer'],
            ['id' => 8, 'name' => 'Admin'],
            ['id' => 9, 'name' => 'Blog'],
            ['id' => 10, 'name' => 'Campaign'],
            ['id' => 12, 'name' => 'Comment'],
            ['id' => 13, 'name' => 'Social link'],
            ['id' => 14, 'name' => 'Site Config'],
            ['id' => 15, 'name' => 'SMS & Email'],
            ['id' => 16, 'name' => 'Area-Division'],
        ]);
    }
}

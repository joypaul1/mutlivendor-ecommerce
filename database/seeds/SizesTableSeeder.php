<?php

use Illuminate\Database\Seeder;
use App\Models\Size;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Size::create([
			"name" => "34"
        ]);

        Size::create([
			"name" => "35"
        ]);

        Size::create([
			"name" => "36"
        ]);

        Size::create([
			"name" => "37"
        ]);

        Size::create([
			"name" => "38"
        ]);

        Size::create([
			"name" => "39"
        ]);

        Size::create([
			"name" => "40"
        ]);

        Size::create([
			"name" => "41"
        ]);

        Size::create([
			"name" => "42"
        ]);

        Size::create([
			"name" => "43"
        ]);

        Size::create([
			"name" => "44"
        ]);
    }
}

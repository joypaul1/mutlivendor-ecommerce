<?php

use Illuminate\Database\Seeder;
use App\Models\Color;


class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
			"name"   => "Red",
			"value"  =>"#FF0000"
        ]);

        Color::create([
			"name"   => "Black",
			"value"  =>"#000000"
        ]);

        Color::create([
			"name"   => "Blue",
			"value"  => "#000FF"
        ]);

        Color::create([
			"name"   => "Green",
			"value"  => "#008000"
        ]);

        Color::create([
			"name"   => "Yellow",
			"value"  => "#FFFF00"
        ]);

        Color::create([
			"name"   => "Navy",
			"value"  => "#000080"
        ]);

        Color::create([
			"name"   => "White",
			"value"  => "#FFFFFF"
        ]);

        Color::create([
			"name"   => "Purple",
			"value"  => "#FF00FF"
        ]);

        Color::create([
			"name"   => "Fuchsia",
			"value"  => "#800080"
        ]);

        Color::create([
			"name"   => "Olive",
			"value"  => "#808000"
        ]);

        Color::create([
			"name"   => "Maroon",
			"value"  =>"#800000"
        ]);
    }
}

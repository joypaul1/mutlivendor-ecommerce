<?php

use App\Models\EmailConfig;
use Illuminate\Database\Seeder;

class EmailConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmailConfig::create([
            'username' => 'f73e60201f877a',
            'password' => '8da25ba508d268',
            'host' => 'smtp.mailtrap.io',
            'port' => '2525',
            'display_name' => 'Anaz',
            'display_email' => 'test@anaz.com',
        ]);
    }
}

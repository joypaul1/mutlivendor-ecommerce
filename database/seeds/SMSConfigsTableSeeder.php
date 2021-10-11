<?php

use App\Models\SMSConfig;
use Illuminate\Database\Seeder;

class SMSConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SMSConfig::create([
            'username' => 'text',
            'password' => 'A130a105@',
            'sender_id' => 'AnazNonBng',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DivisionsTableSeeder::class,
            CitiesTableSeeder::class,
            PostCodeTableSeeder::class,
            UsersTableSeeder::class,
            AdminsTableSeeder::class,
            SiteInfosTableSeeder::class,
            ColorsTableSeeder::class,
            SizesTableSeeder::class,
            BankNameTableSeeder::class,
            SellersTableSeeder::class,
            EmailConfigsTableSeeder::class,
            SMSConfigsTableSeeder::class,
            // Permission
            ModulesTableSeeder::class,
            SubmodulesTableSeeder::class,
            // PermissionsTableSeeder::class,
        ]);
    }
}

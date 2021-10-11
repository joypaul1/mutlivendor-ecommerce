<?php

use App\Submodule;
use Illuminate\Database\Seeder;

class SubmodulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Submodule::insert([
            ['id' => 1, 'module_id' => 3, 'name' => 'Items'],
            ['id' => 2, 'module_id' => 3, 'name' => 'Tag'],
            ['id' => 3, 'module_id' => 3, 'name' => 'Colors'],
            ['id' => 4, 'module_id' => 3, 'name' => 'Sizes'],
            ['id' => 5, 'module_id' => 3, 'name' => 'Units'],
            ['id' => 6, 'module_id' => 3, 'name' => 'Brands'],
            ['id' => 7, 'module_id' => 3, 'name' => 'Origins'],
            ['id' => 8, 'module_id' => 3, 'name' => 'Collections'],
            ['id' => 9, 'module_id' => 3, 'name' => 'Categories'],
            ['id' => 10, 'module_id' => 3, 'name' => 'Sub Categories'],
            ['id' => 11, 'module_id' => 3, 'name' => 'Child Categories'],
            ['id' => 12, 'module_id' => 3, 'name' => 'Warranty Type'],
            ['id' => 13, 'module_id' => 4, 'name' => 'Vat List'],
            ['id' => 14, 'module_id' => 4, 'name' => 'Commission List'],
            ['id' => 15, 'module_id' => 4, 'name' => 'Delivery Size'],
            ['id' => 16, 'module_id' => 5, 'name' => 'seller'],
            ['id' => 17, 'module_id' => 6, 'name' => 'Agent'],
            ['id' => 18, 'module_id' => 7, 'name' => 'Customer'],
            ['id' => 21, 'module_id' => 8, 'name' => 'Admin'],
            ['id' => 22, 'module_id' => 9, 'name' => 'Blog'],
            ['id' => 26, 'module_id' => 14, 'name' => 'Banner'],
            ['id' => 27, 'module_id' => 14, 'name' => 'Slider'],
            ['id' => 28, 'module_id' => 14, 'name' => 'Quick Page'],
            ['id' => 29, 'module_id' => 14, 'name' => 'Information'],
            ['id' => 30, 'module_id' => 14, 'name' => 'SEO Key Word'],
            ['id' => 31, 'module_id' => 15, 'name' => 'SMS Config'],
            ['id' => 32, 'module_id' => 15, 'name' => 'Email Config'],
            ['id' => 33, 'module_id' => 16, 'name' => 'Division'],
            ['id' => 34, 'module_id' => 16, 'name' => 'City'],
            ['id' => 35, 'module_id' => 16, 'name' => 'Area'],
            ['id' => 36, 'module_id' => 10, 'name' => 'Coupons'],
            ['id' => 38, 'module_id' => 12, 'name' => 'Unpublished Comment'],
            ['id' => 39, 'module_id' => 12, 'name' => 'Published Comment'],
            ['id' => 42, 'module_id' => 10, 'name' => 'Flash Sale'],
            ['id' => 43, 'module_id' => 12, 'name' => 'Comment'],
            ['id' => 46, 'module_id' => 13, 'name' => 'Social Link'],
            ['id' => 47, 'module_id' => 1, 'name' => 'Order Pending'],
            ['id' => 48, 'module_id' => 1, 'name' => 'Order Waiting'],
            ['id' => 49, 'module_id' => 1, 'name' => 'Order On Delivery'],
            ['id' => 50, 'module_id' => 1, 'name' => 'Order Not Delivery'],
            ['id' => 51, 'module_id' => 1, 'name' => 'Order Delivered'],
            ['id' => 52, 'module_id' => 1, 'name' => 'Order Cancelled'],
            ['id' => 53, 'module_id' => 2, 'name' => 'Withdraw Request']
        ]);
    }
}

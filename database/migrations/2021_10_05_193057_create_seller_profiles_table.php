<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seller_id');
            $table->string('proprietor_name')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('crporate_address')->nullable();
            $table->string('vat_registration_number')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('trade_licenses')->nullable();
            $table->string('main_business')->nullable();
            $table->string('product_category')->nullable();
            $table->string('corporate_number')->nullable();
            $table->text('address')->nullable();
            $table->text('location_details')->nullable();
            $table->string('division')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_profiles');
    }
}

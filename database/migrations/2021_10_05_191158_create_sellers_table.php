<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('mobile')->unique();
            $table->boolean('type')->default(false);
            $table->boolean('status')->default(true);
            $table->string('image')->default('defaults/user.png');
            $table->string('seller_logo')->nullable();
            $table->string('shop_name')->nullable();
            $table->boolean('is_premium')->default(false);
            $table->integer('premium_order')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('sellers');
    }
}

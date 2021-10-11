<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('status')->default(1);
            $table->boolean('subscription')->default(0);
            $table->unsignedBigInteger('city_id')->default(1);
            $table->unsignedBigInteger('division_id')->default(1);
            $table->unsignedBigInteger('post_code_id')->default(1);

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('post_code_id')->references('id')->on('post_codes');

            $table->text('address_line_1')->nullable();
            $table->text('address_line_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['city_id']);
            $table->dropForeign(['division_id']);
            $table->dropForeign(['post_code_id']);

            $table->dropColumn('city_id');
            $table->dropColumn('division_id');
            $table->dropColumn('post_code_id');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type',['personal','business']);
            $table->string('name');
            $table->integer('phone');
            $table->string('email')->nullable();
            $table->string('nid_number');
            $table->string('bankaccountnumber');
            $table->string('bikashnumber');
            $table->string('logo');
            $table->string('education')->nullable();
            $table->string('contact_person')->nullable();
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
        Schema::dropIfExists('agents');
    }
}

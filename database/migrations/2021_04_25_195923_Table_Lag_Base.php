<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableLagBase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablelag', function (Blueprint $table) {
            $table->increments('id',100);
            $table->string('name', 256)->nullable();
            $table->string('area', 256)->nullable();
            $table->string('legs', 256)->nullable();
            $table->enum('apply_type', array('Visa', 'Passport'))->default('Visa');
            $table->enum('register_type', array('Registerd', 'Not-registerd'))->default('Not-registerd');
            $table->enum('status', array('yes', 'no'))->default('no');
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
        Schema::dropIfExists('tablelag');
    }
}

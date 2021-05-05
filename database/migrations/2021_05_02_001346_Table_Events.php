<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tableevents', function (Blueprint $table) {
            $table->increments('id',100);
            $table->string('note', 256)->nullable();
            $table->date('eventStartdate')->nullable();
            $table->date('eventEnddate')->nullable();
            $table->string('eventStarttime', 256)->nullable();
            $table->string('eventEndtime', 256)->nullable();
            $table->string('eventColor', 256)->nullable();
            $table->string('eventResource', 256)->nullable();
            $table->string('EventId', 256)->nullable();
            $table->string('UserId', 256)->nullable();
            $table->string('lag', 256)->nullable();
            $table->string('ledare', 256)->nullable();
            $table->enum('status', array('yes', 'no'))->default('yes');
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
        Schema::dropIfExists('tableevents');
    }
}

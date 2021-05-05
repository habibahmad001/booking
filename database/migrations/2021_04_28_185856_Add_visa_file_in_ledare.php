<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVisaFileInLedare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tableledare', function (Blueprint $table) {
            $table->longText('kontfile')->nullable();
            $table->longText('lagbdfile')->nullable();
            $table->longText('tillgfile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tableledare', function (Blueprint $table) {
            $table->dropColumn(['kontfile','lagbdfile','tillgfile']);
        });
    }
}

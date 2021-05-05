<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVisaFileInLag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tablelag', function (Blueprint $table) {
            $table->longText('visafile')->nullable();
            $table->longText('lagfile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tablelag', function (Blueprint $table) {
            $table->dropColumn(['visafile','lagfile']);
        });
    }
}

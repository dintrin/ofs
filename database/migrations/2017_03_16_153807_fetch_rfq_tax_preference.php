<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FetchRfqTaxPreference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfqTaxPreference', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfq_no');
            $table->string('tax_preference')->nullable();
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rfqTaxPreference');
        //
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('company_id');
          $table->string('property_name', 100);
          $table->string('contact_first_name', 100);
          $table->string('street_address', 100);
          $table->string('city', 100);
          $table->string('state', 100);
          $table->string('zip', 100);
          $table->string('phone', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}

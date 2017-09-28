<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('business_name');
            $table->integer('country');//*
            $table->integer('deparment');//*
            $table->integer('city');//*
            $table->string('address');
            $table->integer('company_branch');//*
            $table->string('workers_number');
            $table->integer('typology');//*
            $table->string('company_description');            
            $table->string('company_website');
            $table->string('contact_name');      
            $table->string('contact_forename');
            $table->string('contact_surname');
            $table->string('contact_position');//*
            $table->string('contact_phone_1');
            $table->integer('contact_phone_1_type');//*
            $table->string('contact_phone_2');
            $table->integer('contact_phone_2_type');//*

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
        Schema::dropIfExists('offers');
    }
}

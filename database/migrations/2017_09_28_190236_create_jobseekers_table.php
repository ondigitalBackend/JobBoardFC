<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('forename')->index();
            $table->string('surname')->index();
            $table->char('gender', 4)->index();
            $table->integer('citizenship');//*
            $table->string('id_document_type');//*
            $table->integer('id_document');
            $table->date('birthdate');
            $table->string('phone_number');
            $table->integer('deparment');//*
            $table->integer('city');//*
            $table->string('location');
            $table->smallInteger('stratum');
            $table->integer('study_level');//*
            $table->integer('study_area');//*
            $table->boolean('is_employed');
            $table->boolean('permission_work');
            $table->integer('profession');//*
            $table->smallInteger('work_experience');//*
            $table->string('last_country');//*
            $table->string('last_company_branch');
            $table->string('last_position');
            $table->integer('last_position_level');
            $table->text('last_position_functions');
            $table->integer('last_position_span');
            $table->integer('penultimate_country');
            $table->integer('penultimate_company_branch');
            $table->string('penultimate_position');
            $table->integer('penultimate_position_level');
            $table->text('penultimate_position_functions');
            $table->integer('penultimate_position_span');
            $table->text('observations');
            $table->string('updated_by');
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
        Schema::dropIfExists('jobseekers');
    }
}

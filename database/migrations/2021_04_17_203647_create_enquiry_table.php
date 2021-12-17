<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiry', function (Blueprint $table) {
          
             $table->increments('id');
             $table->string('first_name',50)->nullable();
             $table->string('middle_name',50)->nullable();
             $table->string('surname',50)->nullable();
             $table->string('email',200)->nullable();
             $table->string('phone_number',15)->nullable();
             $table->string('study_level',15)->nullable();
             $table->string('course_of_study',50)->nullable();
             $table->string('subject_area',50)->nullable();
             $table->string('preferred_school',50)->nullable();
             $table->string('how_did_you_hear_about_school',50)->nullable();
             $table->string('how_did_you_hear_about_ieis',50)->nullable();
            

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
        Schema::dropIfExists('enquiry');
    }
}

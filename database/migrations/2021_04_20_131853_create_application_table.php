<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->increments('id');
            $table->string('salutation',50);
            $table->string('surname',50);
            $table->string('firstname',50);
            $table->string('middlename',50);
            $table->string('date',50);
            $table->string('email',50);
            $table->string('gender',50);
            $table->string('mobile_short_code',50);
            $table->string('mobile_phone',50);
            $table->string('home_short_code',50);
            $table->string('home_phone',50);
            $table->string('birth_place',50);
            $table->string('country_of_birth',50);
            $table->string('citizen_of',50);
            $table->string('home_street_address',50);
            $table->string('city',50);
            $table->string('postal_code',50);
            $table->string('country_of_residence',50);
            $table->string('relationship_to_applicant',50);
            $table->string('firstname_of_nok',50);
            $table->string('lastname_of_nok',50);
            $table->string('street_address_of_nok',50);
            $table->string('city_of_nok',50);
            $table->string('postal_code_of_nok',50);
            $table->string('province_of_nok',50);
            $table->string('country_of_nok',50);
            $table->string('phone_of_nok',50);
            $table->string('email_of_nok',50);
            $table->string('a_level',250);
            $table->string('ssce',250);
            $table->string('sponsor_letter',250);
            $table->string('academic_ref_letter',250);
            $table->string('work_ref_letter',250);
            $table->string('testimonial',250);
            $table->string('proficiency',250);
            $table->string('personal_statement',250);
            $table->string('data_page',250);
            $table->string('app_fee',250);
            $table->string('service_fee',250);
            $table->string('program_type',50);
            $table->string('diploma_transcript',250)->nullable();
            $table->string('degree_cert',250)->nullable();
            $table->string('undergrad_transcript',250)->nullable();
            $table->string('cv',250);
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
        Schema::dropIfExists('application');
    }
}

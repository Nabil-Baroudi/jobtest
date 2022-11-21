<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
                $table->id();
                $table->string('firstName');
                $table->string('lastName');
                $table->date('date');
                $table->string('gender');
                $table->string('placeOfBirth');
                $table->string('countryOfResidency');
                $table->string('passportNo');
                $table->date('issueDate');
                $table->date('expiryDate');
                $table->string('countryOfIssue');
                $table->date('arrivalDate');
                $table->string('profession')->nullable();
                $table->string('organization')->nullable();
                $table->date('visaDuration');
                $table->string('visaType');
                $table->string('passportPicture')->nullable();
                $table->string('personalPicture')->nullable();
                $table->string('peopleCount')->nullable();
                $table->string('companionFirstName')->nullable();
                $table->string('companionLastName')->nullable();
                $table->date('companionDateOfBirth')->nullable();
                $table->string('companionGender')->nullable();
                $table->string('companionPlaceOfBirth')->nullable();
                $table->string('companionCountryOfResidency')->nullable();
                $table->string('companionPassportNo')->nullable();
                $table->date('companionIssueDate')->nullable();
                $table->date('companionExpiryDate')->nullable();
                $table->string('companionCountryOfIssue')->nullable();
                $table->date('companionArrivalDate')->nullable();
                $table->string('companionProfession')->nullable();
                $table->string('companionOrganization')->nullable();
                $table->date('companionVisaDuration')->nullable();
                $table->string('companionVisaType')->nullable();
                $table->string('companionPassportPicture')->nullable();
                $table->string('companionPersonalPicture')->nullable();
                $table->integer('created_by')->nullable();
                $table->integer('updated_by')->nullable();
                $table->rememberToken();
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

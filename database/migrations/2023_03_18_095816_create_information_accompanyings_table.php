<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationAccompanyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_accompanyings', function (Blueprint $table) {
            $table->id();
            $table->string('CFirstN');
            $table->string('CLastN');
            $table->date('CDateBirth');
            $table->string('CGender');
            $table->bigInteger('CPlaceBirth_id')->unsigned();
            $table->foreign('CPlaceBirth_id')->references('id')->on('code_countries');
            $table->bigInteger('CCountryResidency_id')->unsigned();
            $table->foreign('CCountryResidency_id')->references('id')->on('code_countries');
            $table->text('CPassportNo');
            $table->date('CIssueDate');
            $table->date('CExpiryDate');
            $table->bigInteger('CPlaceIssue_id')->unsigned();
            $table->foreign('CPlaceIssue_id')->references('id')->on('code_countries');
            $table->date('CArrivalDate');
            $table->integer('CVisaDuration');
            $table->string('CVisaStatus');
            $table->text('CImagePersonal');
            $table->text('CImagePassport');
            $table->text('CProfession')->nullable();
            $table->text('COrganization')->nullable();
            $table->bigInteger('Passenger_id')->unsigned();
            $table->foreign('Passenger_id')->references('id')->on('information_passengers');
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
        Schema::dropIfExists('information_accompanyings');
    }
}

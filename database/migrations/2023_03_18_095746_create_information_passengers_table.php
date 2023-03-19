<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationPassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_passengers', function (Blueprint $table) {
            $table->id();
            $table->string('FirstN');
            $table->string('LastN');
            $table->bigInteger('code_id')->unsigned();
            $table->foreign('code_id')->references('id')->on('code_countries');
            $table->text('NumberPhone');
            $table->date('DateBirth');
            $table->string('Gender');
            $table->bigInteger('PlaceBirth_id')->unsigned();
            $table->foreign('PlaceBirth_id')->references('id')->on('code_countries');
            $table->bigInteger('CountryResidency_id')->unsigned();
            $table->foreign('CountryResidency_id')->references('id')->on('code_countries');
            $table->text('PassportNo');
            $table->date('IssueDate');
            $table->date('ExpiryDate');
            $table->bigInteger('PlaceIssue_id')->unsigned();
            $table->foreign('PlaceIssue_id')->references('id')->on('code_countries');
            $table->date('ArrivalDate');
            $table->integer('VisaDuration');
            $table->string('VisaStatus');
            $table->text('ImagePersonal2');
            $table->text('ImagePassport2');
            $table->text('Profession')->nullable();
            $table->text('Organization')->nullable();
            $table->integer('IsCompanion')->nullable();
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
        Schema::dropIfExists('information_passengers');
    }
}

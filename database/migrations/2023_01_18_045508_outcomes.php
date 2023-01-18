<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create(
            'Outocomes',
            function (Blueprint $table) {
                $table->bigIncrements('id')->index();
                $table->foreignId('id_pasien')->references('id')->on('Pasien');
                $table->foreignId('id_category')->references('id')->on('CategoryTreatment');
                $table->integer('Inhospital_Death');
                $table->integer('Vulnerable_phase_death');
                $table->integer('Vulnerable_phase_rehospitalization');
                $table->integer('Total_Rehospitalization');
                $table->integer('All_cause_death');
                $table->integer('Cardiac_related_death');
                $table->integer('Date_of_death');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Outocomes');
    }
};

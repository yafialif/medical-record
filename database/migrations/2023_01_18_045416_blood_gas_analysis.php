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
            'BloodGasAnalysis',
            function (Blueprint $table) {
                $table->bigIncrements('id')->index();
                $table->foreignId('id_pasien')->references('id')->on('Pasien');
                $table->foreignId('id_category')->references('id')->on('CategoryTreatment');
                $table->integer('pH');
                $table->integer('PCO2');
                $table->integer('HCO3');
                $table->integer('PO2');
                $table->integer('Lactate');
                $table->integer('BE');
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
        Schema::dropIfExists('BloodGasAnalysis');
    }
};

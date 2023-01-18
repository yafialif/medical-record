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
            'RiskFactor',
            function (Blueprint $table) {
                $table->bigIncrements('id')->index();
                $table->foreignId('id_pasien')->references('id')->on('Pasien');
                $table->foreignId('id_category')->references('id')->on('CategoryTreatment');
                $table->string('Hypertension', 191);
                $table->string('Diabetes_or_prediabetes', 191);
                $table->string('Dislipidemia', 191);
                $table->string('Alcohol', 191);
                $table->string('Smoker', 191);
                $table->string('CKD', 191);
                $table->string('Valvular_heart_disease', 191);
                $table->string('Atrial_fibrillation', 191);
                $table->string('Bundle_Branch_Block', 191);
                $table->string('History_of_HF', 191);
                $table->string('History_of_CAD', 191);
                $table->string('History_of_PCI_or_CABG', 191);
                $table->string('History_of_heart_valve_surgery', 191);
                $table->string('OMI_or_CAD', 191);
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
        Schema::dropIfExists('RiskFactor');
    }
};

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
            'ClinicalProfile',
            function (Blueprint $table) {
                $table->bigIncrements('id')->index();
                $table->foreignId('id_pasien')->references('id')->on('Pasien');
                $table->foreignId('id_category')->references('id')->on('CategoryTreatment');
                $table->integer('Height');
                $table->integer('Weight');
                $table->integer('BMI');
                $table->integer('SBP');
                $table->integer('DBP');
                $table->integer('HR');
                $table->string('Dyspnoea_at_rest', 191);
                $table->string('Dyspnoea_on_exertion', 191);
                $table->string('Orthopnea', 191);
                $table->string('PND', 191);
                $table->string('Peripheral_Oedema', 191);
                $table->string('Pulmonary_rales', 191);
                $table->string('JVP', 191);
                $table->string('Type_of_acute_HF', 191);
                $table->string('Staging', 191);
                $table->string('NYHA_Class', 191);
                $table->string('Etiology', 191);
                $table->string('Cardiogenic_shock', 191);
                $table->string('Respiratory_failure', 191);
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
        Schema::dropIfExists('ClinicalProfile');
    }
};

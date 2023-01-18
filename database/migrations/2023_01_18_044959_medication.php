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
            'Medication',
            function (Blueprint $table) {
                $table->bigIncrements('id')->index();
                $table->foreignId('id_pasien')->references('id')->on('Pasien');
                $table->foreignId('id_category')->references('id')->on('CategoryTreatment');
                $table->integer('Dopamin_Dose');
                $table->integer('Dopamin_Duration');
                $table->integer('Dobutamin_Dose');
                $table->integer('Dobutamin_Duration');
                $table->integer('Norepinephrine_Dose');
                $table->integer('Norepinephrine_Duration');
                $table->integer('Epinephrin_Dose');
                $table->integer('Epinephrin_Duration');
                $table->string('ACEi');
                $table->integer('ACEi_Dose_at_Admission');
                $table->integer('ACEi_Dose_at_Predischarge');
                $table->string('ARB');
                $table->integer('ARB_Dose_at_Admission');
                $table->integer('ARB_Dose_at_Predischarge');
                $table->integer('ARNI_Dose_at_Admission');
                $table->integer('ARNI_Dose_at_Predischarge');
                $table->integer('MRA_Dose_at_Admission');
                $table->integer('MRA_Dose_at_Predischarge');
                $table->string('Beta_Blocker');
                $table->integer('Beta_Blocker_Dose_at_Admission');
                $table->integer('Beta_Blocker_Dose_at_Predischarge');
                $table->integer('Loop_Diuretic_Dose_at_Admission');
                $table->integer('Loop_Diuretic_Dose_at_Predischarge');
                $table->string('SGLT2i');
                $table->integer('SGLT2i_Dose_at_Admission');
                $table->integer('SGLT2i_Dose_at_Predischarge');
                $table->integer('Tolvaptan_Total_Dose');
                $table->string('Insulin');
                $table->integer('Dose_insulin');
                $table->integer('Other_OAD');
                $table->integer('ACEi_Dose');
                $table->string('ACEi_intolerance');
                $table->integer('ARB_Dose');
                $table->integer('ARNI_Dose');
                $table->integer('Beta_Blocker_Dose');
                $table->string('Beta_Blocker_Intolerance');
                $table->string('MRA_Dose');
                $table->string('MRA_Intolerance');
                $table->integer('SGLT2i_Dose');
                $table->string('Loop_Diuretic');
                $table->integer('Loop_Diuretic_Dose');
                $table->integer('Ivabradine_Dose');
                $table->integer('Devices');
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
        Schema::dropIfExists('Medication');
    }
};

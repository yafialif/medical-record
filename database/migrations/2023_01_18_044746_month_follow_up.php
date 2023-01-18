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
        Schema::create(
            'MountFollowUp',
            function (Blueprint $table) {
                $table->bigIncrements('id')->index();
                $table->foreignId('id_pasien')->references('id')->on('Pasien');
                $table->foreignId('id_category')->references('id')->on('CategoryTreatment');
                $table->string('Mount', 191);
                $table->string('Peripheral_Oedema', 20);
                $table->string('NYHA_Class', 50);
                $table->string('SBP', 191);
                $table->string('DBP', 191);
                $table->string('HR', 191);
                $table->string('Echo_EF', 191);
                $table->string('Echo_TAPSE', 191);
                $table->string('Echo_EDV', 191);
                $table->string('Echo_ESV', 191);
                $table->string('Echo_EDD', 191);
                $table->string('Echo_ESD', 191);
                $table->string('Echo_Sign_MR', 191);
                $table->string('Echo_Diastolic_function', 191);
                $table->string('ACEi', 191);
                $table->string('ACEi_Dose', 191);
                $table->string('ACEi_Intolerance', 191);
                $table->string('ARB', 191);
                $table->string('ARB_Dose', 191);
                $table->string('ARNI_Dose', 191);
                $table->string('Beta_Blocker', 191);
                $table->string('Beta_Blocker_Dose', 191);
                $table->string('Beta_Blocker_Intolerance', 191);
                $table->string('MRA_Dose', 191);
                $table->string('MRA_Intolerance', 191);
                $table->string('SGLT2i', 191);
                $table->string('SGLT2i_Dose', 191);
                $table->string('Loop_Diuretic_Dose', 191);
                $table->string('Ivabradine_Dose', 191);
                $table->string('Insulin', 191);
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
        Schema::dropIfExists('MountFollowUp');
    }
};

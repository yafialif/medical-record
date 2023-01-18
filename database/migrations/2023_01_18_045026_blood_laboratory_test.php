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
            'BloodLaboratoryTest',
            function (Blueprint $table) {
                $table->bigIncrements('id')->index();
                $table->foreignId('id_pasien')->references('id')->on('Pasien');
                $table->foreignId('id_category')->references('id')->on('CategoryTreatment');
                $table->string('Hemoglobin');
                $table->string('Hematocrite');
                $table->string('Erythrocyte');
                $table->string('Random_Blood_Glucose');
                $table->string('Fasting_Blood_Glucose');
                $table->string('2_Hours_Post_Prandial_Blood_Glucose');
                $table->string('Natrium');
                $table->string('Kalium');
                $table->string('Ureum');
                $table->string('BUN');
                $table->string('Serum_Creatinine_Scr');
                $table->string('GFR');
                $table->string('Uric_Acid');
                $table->string('NT_ProBNP_at_admission');
                $table->string('NT_ProBNP_at_discharge');
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
        Schema::dropIfExists('BloodLaboratoryTest');
    }
};

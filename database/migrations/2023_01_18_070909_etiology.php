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
            'Etiology',
            function (Blueprint $table) {
                $table->bigIncrements('id')->index();
                $table->foreignId('id_pasien')->references('id')->on('Pasien');
                $table->foreignId('id_category')->references('id')->on('CategoryTreatment');
                $table->string('ACS', 191);
                $table->string('Hypertension_Emergency', 191);
                $table->string('Arrhytmia', 191);
                $table->string('Acute_Mechanical_Cause', 191);
                $table->string('Pulmonary_Embolism', 191);
                $table->string('Infections', 191);
                $table->string('Tamponade', 191);
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
    }
};

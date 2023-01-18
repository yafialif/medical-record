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
        Schema::create('Pasien', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('nik');
            $table->string('name');
            $table->date('birth');
            $table->integer('age');
            $table->string('sex');
            $table->string('phone');
            $table->date('DataOfAdmission');
            $table->date('DataOfDischarge');
            $table->string('Insurance');
            $table->string('Education');
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
        //
        Schema::dropIfExists('Pasien');
    }
};

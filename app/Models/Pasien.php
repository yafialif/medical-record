<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Pasien extends Model
{
    use HasFactory;
    public function up()
    {
        Schema::create('Pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MedRec');
            $table->string('name');
            $table->date('birth');
            $table->integer('age');
            $table->string('sex');
            $table->string('phone');
            $table->date('DataOfAdmission');
            $table->date('DataOfDischarge');
            $table->string('SosioEconomic');
            $table->string('Insurance');
            $table->string('Education');

            $table->timestamps();
        });
    }
}

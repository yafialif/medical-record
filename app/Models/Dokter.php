<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Dokter extends Model
{
    use HasFactory;

    public function up()
    {
        Schema::create('Dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("id_user");
            $table->string("nama_dokter");
            $table->string("instansi_rs");
            $table->timestamps();
        });
    }
}

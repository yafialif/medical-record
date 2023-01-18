<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'Pasien';
    protected $fillable = [
        'MedRec',
        'Name',
        'Date of birth',
        'Age',
        'Sex',
        'Phone',
        'Date of Admission',
        'Sosio economic',
        'Insurance',
        'Education',
    ];
}

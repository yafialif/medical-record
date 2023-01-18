<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryTreatment;

class CategoryTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CategoryTreatment::insert(array(
            [
                'NameCategory' => 'ADHF',
            ],
            [
                'NameCategory' => 'Chronic',
            ],
        ));
    }
}

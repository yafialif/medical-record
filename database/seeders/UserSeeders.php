<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::where('email', 'admin@inahfcarmet.org')->first();
        if (empty($admin)) {
            User::insert([
                'name' => 'Administrator',
                'email' => 'admin@inahfcarmet.org',
                'password' => Hash::make('Semangat123@'),
                'role' => 'admin',
                'created_at' => date(now())
            ]);
        }
        $user = User::where('email', 'user@inahfcarmet.org')->first();
        if (empty($user)) {
            User::insert([
                'name' => 'User',
                'email' => 'user@inahfcarmet.org',
                'password' => Hash::make('Semangat123@'),
                'role' => 'user',
                'created_at' => date(now())
            ]);
        }
    }
}

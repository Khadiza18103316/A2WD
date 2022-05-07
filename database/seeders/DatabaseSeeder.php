<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Afride Ahsan';
        $user->email = 'afrideahsan@gmail.com';
        $user->password = bcrypt('password');
        $user->is_admin = 1;
        $user->save();
    }
}
<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        User::create([
            'username' => config('login.username'),
            'password' => bcrypt(config('login.password'))
        ]);
    }
}

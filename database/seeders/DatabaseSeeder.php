<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        DB::table('categories')->delete();

        User::create([
            'username' => config('login.username'),
            'password' => bcrypt(config('login.password'))
        ]);
        Category::factory(4)->create();
        Post::factory(100)->create();

    }
}

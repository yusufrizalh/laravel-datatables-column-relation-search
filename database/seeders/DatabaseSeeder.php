<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(5)->create();
        Article::factory(30)->create();
    }
}

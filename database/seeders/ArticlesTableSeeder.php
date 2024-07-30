<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   // database/seeders/ArticlesTableSeeder.php
    public function run()
    {
        \DB::table('articles')->insert([
            ['title' => 'First Article', 'content' => 'This is the content of the first article.', 'created_at' => now(), 'updated_at' => now() ],
            ['title' => 'Second Article', 'content' => 'This is the content of the second article.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

}
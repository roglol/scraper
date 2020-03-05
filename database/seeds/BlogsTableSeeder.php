<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             // Let's truncate our existing records to start from scratch.
             Blog::truncate();

             $faker = \Faker\Factory::create();
     
             // And now, let's create a few articles in our database:
             for ($i = 0; $i < 50; $i++) {
                 Blog::create([
                     'title' => $faker->sentence,
                     'body' => $faker->paragraph,
                 ]);
             }
    }
}

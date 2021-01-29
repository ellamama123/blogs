<?php

namespace Database\Seeders;

use App\Models\blogs;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        blogs::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            blogs::create([
                'title' => $faker->sentence,
                'des' => $faker->paragraph,
                'detail' => $faker->paragraph,
                'category' => $faker->numberBetween(1,7),
                'public' => $faker->numberBetween(0,1),
                'data_pubblic' => $faker->date,
                'thumbs' => $faker->paragraph,
            ]);
        }
    }
}

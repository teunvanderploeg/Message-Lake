<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $dateTime = now();
        foreach (range(1, 30) as $index) {
            DB::table('mijn_posts')->insert([
                'title' => $faker->sentence(3),
                'content' => $faker->paragraph(4),
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'created_at' => $dateTime,
                'updated_at' => $dateTime,
            ]);
        }
    }
}

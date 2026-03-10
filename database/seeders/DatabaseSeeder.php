<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RoboticsKitSeeder::class,
            CourseSeeder::class,
        ]);

        Course::factory()->count(100)->create();
    }
}

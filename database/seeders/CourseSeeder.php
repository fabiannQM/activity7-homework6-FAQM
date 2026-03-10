<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'key' => 'Rob101',
                'title' => 'Introduction to Robotics',
                'robotics_kit' => 'StarterKit',
            ],
            [
                'key' => 'Rob102',
                'title' => 'Introduction to Automation',
                'robotics_kit' => 'StarterKit',
            ],
            [
                'key' => 'Rob103',
                'title' => 'Programming for Robotics',
                'robotics_kit' => 'Educational Robotics Kit',
            ],
            [
                'key' => 'Rob104',
                'title' => 'Characteristics of a Robot',
                'robotics_kit' => 'Kit5',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['key' => $course['key']],
                $course
            );
        }
    }
}

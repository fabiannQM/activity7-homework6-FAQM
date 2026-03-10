<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\RoboticsKit;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition(): array
    {
        $kit = RoboticsKit::query()->inRandomOrder()->first();

        return [
            'key' => $this->faker->unique()->bothify('Rob###'),
            'title' => $this->faker->sentence(4),
            'cover_url' => $this->faker->imageUrl(640, 360, 'technology', true),
            'content' => $this->faker->paragraphs(3, true),
            'robotics_kit' => $kit?->name ?? 'StarterKit',
            'robotics_kit_id' => $kit?->id,
        ];
    }
}

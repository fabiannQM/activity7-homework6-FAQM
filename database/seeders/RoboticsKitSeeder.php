<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        $kits = [
            ['name' => 'StarterKit'],
            ['name' => 'Educational Robotics Kit'],
            ['name' => 'Kit5'],
        ];

        foreach ($kits as $kit) {
            RoboticsKit::updateOrCreate(
                ['name' => $kit['name']],
                $kit
            );
        }
    }
}

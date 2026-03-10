<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admon.',
                'email' => 'admon@robotics.com',
                'password' => 'Adm@2022',
                'role' => 'Administrative',
            ],
            [
                'name' => 'Tecmilenio.',
                'email' => 'tecmilenio@robotics.com',
                'password' => 'Adm@2022',
                'role' => 'Teacher',
            ],
            [
                'name' => 'Student.',
                'email' => 'student@robotics.com',
                'password' => 'Adm@2022',
                'role' => 'Student',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    'password' => Hash::make($user['password']),
                    'role' => $user['role'],
                ]
            );
        }
    }
}

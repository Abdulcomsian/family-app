<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            [

                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),

            ],

            [

                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('test123'),

            ],

        ];

        foreach ($users as $key => $user) {

            User::create($user);
        }
    }
}

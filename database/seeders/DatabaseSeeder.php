<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->createMany([
            [
                'name' => 'Girvan Azhar',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => time(),
            ],
            [
                'name' => 'Lah Girvan',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'email_verified_at' => time(),
            ],
        ]);

        // Project::factory()->count(30)->hasTasks(30)->create();
    }
}

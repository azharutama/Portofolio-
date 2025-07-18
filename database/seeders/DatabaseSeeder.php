<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'azharutama',
            'email' => 'azhar@gmail.com',
            'password' => bcrypt('azhar'),
            'remember_token' => null,
            'email_verified_at' => now(),

        ]);

        $this->call([
            SkillSeeder::class,
            ProjectSeeder::class,
            AchievementSeeder::class,
        ]);
    }
}

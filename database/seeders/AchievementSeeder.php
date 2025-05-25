<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('achievements')->insert([
            [
                'name' => 'Sololearn PHP',
                'description' => 'PHP course completed on Sololearn',
                'image' => 'images/SolearnPHP.png',
            ],

        ]);
    }
}

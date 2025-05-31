<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name' => 'PHP', 'competention' => 'Advance', 'description' => 'Advanced PHP programming skills'],
            ['name' => 'Laravel', 'competention' => 'Advance', 'description' => 'Advanced Laravel development'],
            ['name' => 'MySQL', 'competention' => 'Advance', 'description' => 'Advanced MySQL database management'],
            ['name' => 'HTML', 'competention' => 'Advance', 'description' => 'Advanced HTML markup skills'],
            ['name' => 'CSS', 'competention' => 'Advance', 'description' => 'Advanced CSS styling'],
            ['name' => 'Tailwind', 'competention' => 'Advance', 'description' => 'Advanced Tailwind CSS utility-first styling'],
            ['name' => 'Bootstrap', 'competention' => 'Advance', 'description' => 'Advanced usage of Bootstrap framework'],
            ['name' => 'JavaScript', 'competention' => 'Advance', 'description' => 'Advanced JavaScript programming'],
            ['name' => 'Go', 'competention' => 'Beginner', 'description' => 'Basic understanding of Go programming language'],
            ['name' => 'Microsoft Office', 'competention' => 'Advance', 'description' => 'Advanced skills in Microsoft Office suite'],
            ['name' => 'Google Cloud', 'competention' => 'Advance', 'description' => 'Advanced usage of Google Cloud Platform'],
            ['name' => 'Java', 'competention' => 'Intermediate', 'description' => 'Intermediate Java programming skills'],
            ['name' => 'Kotlin', 'competention' => 'Beginner', 'description' => 'Basic understanding of Kotlin'],
            ['name' => 'Docker', 'competention' => 'Intermediate', 'description' => 'Intermediate knowledge of Docker and containerization'],
        ]);
    }
}

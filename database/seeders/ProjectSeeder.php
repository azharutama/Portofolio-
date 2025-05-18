<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'name' => 'Stryde e-commerce',
                'description' => 'Website e-commerce yang dibangun menggunakan Laravel dan React. Memiliki fitur keranjang belanja, manajemen produk, dan sistem pembayaran.',
                'url' => 'https://github.com/rayhanrezki/Stryde',
                'image' => 'images/1.png',
                'github' => 'https://github.com/rayhanrezki/Stryde',
                'technologies' => 'Laravel, React, MySQL,inertiajs',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}

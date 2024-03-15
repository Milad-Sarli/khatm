<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KhatmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Khatm::factory(10)->create();
    }
}

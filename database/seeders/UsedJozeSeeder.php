<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsedJozeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\UsedJoze::factory(10)->create();
    }
}

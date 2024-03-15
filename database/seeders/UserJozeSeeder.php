<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserJozeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\UserJoze::factory(10)->create();
    }
}

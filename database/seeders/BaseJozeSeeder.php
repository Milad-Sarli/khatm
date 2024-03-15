<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BaseJozeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\BaseJoze::factory(10)->create();
    }
}

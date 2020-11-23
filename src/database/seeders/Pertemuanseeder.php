<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PertemuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Pertemuan::factory()
        ->count(20)
        ->create();
    }
}
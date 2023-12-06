<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Statu::factory()->create([
            'nameStatus' => 'Canceled',
        ]);
        \App\Models\Statu::factory()->create([
            'nameStatus' => 'Waited',
        ]);
        \App\Models\Statu::factory()->create([
            'nameStatus' => 'Delivered',
        ]);
        \App\Models\Statu::factory()->create([
            'nameStatus' => 'Successful delivery',
        ]);
    }
}

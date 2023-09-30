<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Role::factory()->create([
                'nameRole' => 'user',
            ]);

            \App\Models\Role::factory()->create([
                'nameRole' => 'Quản Trị',
            ]);
            \App\Models\Role::factory()->create([
                'nameRole' => 'Admin',
            ]);
    }
}

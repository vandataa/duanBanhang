<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Statu::factory()->create([
            'nameStatus' => 'Canceled',
        ]);
        \App\Models\Statu::factory()->create([
            'nameStatus' => 'Waited',
        ]);
        \App\Models\Statu::factory()->create([
            'nameStatus' => 'Delivered',
        ]);
        \App\Models\Role::factory()->create([
            'nameRole' => 'user',
        ]);

        \App\Models\Role::factory()->create([
            'nameRole' => 'Quản Trị',
        ]);
        \App\Models\Role::factory()->create([
            'nameRole' => 'Admin',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Nguyễn Văn Đạt',
            'email' => 'ndat1@gmail.com',
            'password'=> bcrypt('1'),
            'role'=> '3',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Nguyễn Văn Đạt',
            'email' => 'ndat2@gmail.com',
            'password'=> bcrypt('1'),
            'role'=> '2',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Nguyễn Văn Đạt',
            'email' => 'ndat3@gmail.com',
            'password'=> bcrypt('1'),
            'role'=> '1',
        ]);
        \App\Models\Product::factory(20)->create();
    }
}

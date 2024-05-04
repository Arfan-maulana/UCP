<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

          User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@admin.com',
             'is_admin'=> true
        ]);

        User::factory()->create([
            'name' => 'Kelompok 1',
            'email' => 'Kelompok@mail.com',
       ]);

        User::factory()->create([
            'name' => 'Kelompok 2',
            'email' => 'Kelompok2@mail.com',
       ]);

        User::factory(100)-> create();
        Todo::factory(500)-> create();
    }
}

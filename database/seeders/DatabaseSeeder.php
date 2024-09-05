<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Name;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*Name::create([
            'fname' => 'Julie Ann',
            'lname' => 'Fernandez',
            'age' => '22',
            'role_id' => '2'
        ]); */

        Role::create([
            'Role' => 'Cute'
        ]);

    }
}

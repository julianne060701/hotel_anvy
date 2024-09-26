<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bed_Type;
use App\Models\Name;
use App\Models\Role;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

       /* Role::create([
            'Role' => 'Cute'
        ]);
*/

        /*User::create([
            'email' => 'anvy@gmail.com',
            'password' => Hash::make('Anvy'),
            'user_level_id' => '1',
            'person_id' => '1'
        ]);
        */

        Room::create([
            'room_name' => 'Neil Mark Lami',
            'unit' => '1',
            'capacity' => '3',
            'bed_type_id' => '1',
            'Rate' => '1000',
            'Status' => 'Booked',
            'Pts_earned' => '0',
            'Pts_value' => '0',
            'room_type' => 'Suite',
            'room_number' => '107'
        ]);


        Bed_Type::create([
            'type' => 'Queen'
        ]);
    }
}

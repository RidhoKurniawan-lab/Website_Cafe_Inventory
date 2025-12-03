<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::insert([
            ['roles' => 'Admin'],
            ['roles' => 'Roster'],
            ['roles' => 'Barista']
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'role_id'=> 1,
        ]);
    }
}

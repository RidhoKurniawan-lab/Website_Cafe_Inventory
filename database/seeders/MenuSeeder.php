<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        DB::table('menus')->insert([
            [
                'name' => 'Dashboard',
                'icon' => 'fa-home',
                'order' => 1,
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'User',
                'icon' => 'fa-user',
                'order' => 2,
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

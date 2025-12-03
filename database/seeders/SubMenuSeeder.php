<?php

namespace Database\Seeders;

use App\Models\SubMenu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('submenus')->truncate();

        SubMenu::create([
            'name' => 'Add User',
            'url' => '/add_user',
            'icon' => 'fa-user-plus',
            'order' => 1,
            'menu_id' => 2,
            'is_active' => false
        ]);
    }
}

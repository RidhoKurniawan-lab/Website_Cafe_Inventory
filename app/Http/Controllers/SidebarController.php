<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class SidebarController extends Controller
{
    public function get_Sidebar(Request $request){

        $Menu_With_Submenu = Menu::with('submenu')->get();

        return response()->json($Menu_With_Submenu);
    }
}

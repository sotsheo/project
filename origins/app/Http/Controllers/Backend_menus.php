<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Backend_menu;

class Backend_menus extends Controller
{
    function create(){
    	return view("backend.menu.create");
    }
}

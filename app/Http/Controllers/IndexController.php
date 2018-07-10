<?php

namespace App\Http\Controllers;

use App\Menu;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $menu = Menu::all()->sortBy('sort_by');
        return view('index', ['menu' => $menu]);
    }

    public function admin()
    {
        echo 'Test';
        //return view('store.menu');
    }
}

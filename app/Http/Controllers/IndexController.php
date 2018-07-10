<?php

namespace App\Http\Controllers;

use App\MenuItem;

class IndexController extends Controller
{

    public function show()
    {
        $menu = MenuItem::all()->sortBy('sort_by');
        return view('index', ['menu' => $menu]);
    }

    public function admin()
    {
        echo 'Test';
        //return view('store.menu');
    }
}

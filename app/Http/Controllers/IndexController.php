<?php

namespace App\Http\Controllers;

use App\Menu as BDMenu;
//use Lavary\Menu\Menu;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $menu = BDMenu::all()->sortBy('id');

//        $menuBuilder = new Menu();
//        $menuBuilder->make('NavBar', function ($m) use ($menu)
//        {
//            foreach ($menu as $item) {
//                if ($item->parent_id == 0) {
//                    $m->add($item->name, $item->link, $item->id_role)->id($item->id);
//                }
//                else {
//                    if ($m->find($item->parent_id)) {
//                        $m->find($item->parent_id)->add($item->name, $item->link, $item->id_role)->id($item->id);
//                    }
//                }
//            }
//        });

        //dump($menuBuilder);

        return view('index')->with('menu', $menu);
    }

    public function admin()
    {
        echo 'Test';
        //return view('store.menu');
    }
}

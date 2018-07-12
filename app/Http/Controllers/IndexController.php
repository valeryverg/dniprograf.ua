<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        // роли аутентифицированного пользователя
        $roles = User::find(Auth::id())->roles()->orderBy('name')->get();

        //инициализация коллекции
        $role_id = collect([]);

        // push ID ролей в пользователя в коллекцию
        foreach ($roles as $role)
        {
            $role_id->push($role->id);
        }

        // формирования меню с учетом ролей
        $menu = Menu::all()->load('submenu')->whereIn('role_id', $role_id)->sortBy('id');

        // формирование главной страницы
        return view('index', compact('menu'));
    }

    public function admin()
    {
        echo 'Test';
        //return view('store.menu');
    }
}

<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Repositories\MenuRepository;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;


class IndexController extends MainController
{
    //private $menu;

    public function __construct()
    {
        parent::__construct();//(new MenuRepository(new Menu));

        $this->template = 'index';
    }

    public function getMenu1()
    {
        // роли аутентифицированного пользователя
        $roles = User::find(Auth::id())->roles()->orderBy('name')->get();

        //инициализация коллекции
        $role_id = collect([]);

        // push ID ролей пользователя в коллекцию
        foreach ($roles as $role)
        {
            $role_id->push($role->id);
        }

        // формирования меню с учетом ролей
        //$this->menu = Menu::all()->load('submenu')->whereIn('role_id', $role_id)->sortBy('id');
    }

    public function index1()
    {
        /*$this->menu = $this->getMenu();

        // формирование главной страницы
        return view('index')->with('menu', $this->menu);*/
    }

    public function index()
    {
        return $this->renderOutput();

    }
}

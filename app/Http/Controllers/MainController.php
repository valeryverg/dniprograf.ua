<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;
use Illuminate\Http\Request;
use App\User;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    protected $menu_rep;
    protected $material_rep;
    protected $typeoper_rep;
    protected $operation_rep;

    protected $template;
    protected $vars = array();

    public function __construct()//(MenuRepository $menu_rep)
    {
        $this->middleware('auth');
        /*$this->menu_rep = $menu_rep;
        dd($menu_rep);*/
    }

    protected function renderOutput()
    {
        $menu = $this->getMenu();

        dd($menu);

        $navbar = view('layout.navbar')->render();
        $this->vars = array_add($this->vars, 'navbar', $navbar);
        return view($this->template)->with($this->vars);
    }

    protected function getMenu()
    {
        //$menu = $this->menu_rep()->get();
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
        $menu = $this->menu = Menu::all()->load('submenu')->whereIn('role_id', $role_id)->sortBy('id');

        return $menu;
    }
}

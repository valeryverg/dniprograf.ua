<?php

use Illuminate\Database\Seeder;
use App\SubMenu;

class SubMenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubMenu::create(
            [
                'id' => 81,
                'menu_id' => 8,
                'name' => 'Матеріали',
                'sublink' => 'material',
            ]
        );

        SubMenu::create(
            [
                'id' => 82,
                'menu_id' => 8,
                'name' => 'Тип операції',
                'sublink' => 'typeoper',
            ]
        );

        SubMenu::create(
            [
                'id' => 91,
                'menu_id' => 9,
                'name' => 'Користувачі',
                'sublink' => 'users',
            ]
        );

        SubMenu::create(
            [
                'id' => 92,
                'menu_id' => 9,
                'name' => 'Ролі',
                'sublink' => 'roles',
            ]
        );
    }
}

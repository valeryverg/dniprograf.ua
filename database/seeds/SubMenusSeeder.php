<?php

use Illuminate\Database\Seeder;
use App\Menu;

class SubMenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(
            [
                'id' => 81,
                'menu_id' => 8,
                'name' => 'Матеріали',
                'link' => 'material',
            ]
        );

        Menu::create(
            [
                'id' => 82,
                'menu_id' => 8,
                'name' => 'Тип операції',
                'link' => 'typeoper',
            ]
        );

        Menu::create(
            [
                'id' => 91,
                'menu_id' => 9,
                'name' => 'Користувачі',
                'link' => 'users',
            ]
        );

        Menu::create(
            [
                'id' => 92,
                'menu_id' => 9,
                'name' => 'Ролі',
                'link' => 'roles',
            ]
        );
    }
}

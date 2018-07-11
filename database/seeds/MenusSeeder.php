<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusSeeder extends Seeder
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
                'id' => 9,
                'parent_id' => 0,
                'name' => 'Адміністрування',
                'link' => 'admin',
                'role_id' => 1,
            ]
        );

        Menu::create(
            [
                'id' => 1,
                'parent_id' => 0,
                'name' => 'Складський облік',
                'link' => 'account',
                'role_id' => 2,
            ]
        );

        Menu::create(
            [
                'id' => 7,
                'parent_id' => 0,
                'name' => 'Звіти',
                'link' => 'report',
                'role_id' => 2,
            ]
        );

        Menu::create(
            [
                'id' => 8,
                'parent_id' => 0,
                'name' => 'Довідники',
                'link' => 'directory',
                'role_id' => 2,
            ]
        );

        Menu::create(
            [
                'id' => 81,
                'parent_id' => 8,
                'name' => 'Матеріали',
                'link' => 'directory',
                'role_id' => 2,
            ]
        );

        Menu::create(
            [
                'id' => 82,
                'parent_id' => 8,
                'name' => 'Тип операції',
                'link' => 'directory',
                'role_id' => 2,
            ]
        );

        Menu::create(
            [
                'id' => 91,
                'parent_id' => 9,
                'name' => 'Користувачі',
                'link' => 'admin',
                'role_id' =>1,
            ]
        );

        Menu::create(
            [
                'id' => 92,
                'parent_id' => 9,
                'name' => 'Ролі',
                'link' => 'admin',
                'role_id' =>1,
            ]
        );
    }
}

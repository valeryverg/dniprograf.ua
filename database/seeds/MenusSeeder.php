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
                'name' => 'Адміністрування',
                'link' => 'admin',
                'role_id' => 1,
            ]
        );

        Menu::create(
            [
                'id' => 1,
                'name' => 'Складський облік',
                'link' => 'account',
                'role_id' => 2,
            ]
        );

        Menu::create(
            [
                'id' => 7,
                'name' => 'Звіти',
                'link' => 'report',
                'role_id' => 2,
            ]
        );

        Menu::create(
            [
                'id' => 8,
                'name' => 'Довідники',
                'link' => 'directory',
                'role_id' => 2,
            ]
        );
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'name' => 'Адміністратор',
                'type' => 'admin',
            ]
        );

        Role::create(
            [
                'name' => 'Користувач',
                'type' => 'user',
            ]
        );
    }
}

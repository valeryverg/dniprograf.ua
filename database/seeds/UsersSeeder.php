<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
                [
                    'name' => 'Адміністратор',
                    'login' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make(env('APP_PASS')),
                ]
        );
        User::create(
                [
                    'name' => 'Валерій Вергуленко',
                    'login' => 'valery',
                    'email' => 'valeryverg@gmail.com',
                    'password' => Hash::make(env('APP_PASS')),
                ]
        );
    }
}

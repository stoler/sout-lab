<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run () {
        DB::table('users')->delete();

        $users = array(
            array(
                'name' => 'asp87@list.ru',
                'password' => Hash::make('111111'),
                'email' => 'asp87@list.ru'
            )
        );

        DB::table('users') -> insert($users);
    }
}
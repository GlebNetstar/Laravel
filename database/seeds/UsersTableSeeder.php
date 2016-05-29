<?php
/**
 * Created by PhpStorm.
 * User: Gleb
 * Date: 29.05.2016
 * Time: 2:03
 */

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name'     => 'First Citizen',
            'email'    => 'user1@example.com',
            'password' => Hash::make('test'),
        ));

        User::create(array(
            'name'     => 'Second Creature',
            'email'    => 'user2@example.com',
            'password' => Hash::make('test'),
        ));
    }
}
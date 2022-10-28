<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name='Angel';
        $user->lastname='Aviles';
        $user->email='krazick@gmail.com';
        $user->password='123456';

        $user->save();

        $user = new User();
        $user->name='Angel 2';
        $user->lastname='Aviles 2';
        $user->email='krazick2@gmail.com';
        $user->password='123456222';
        $user->save();
    }
}

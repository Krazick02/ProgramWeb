<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Angel',
            'lastname' => 'Aviles',
            'email' => 'krazick@gmail.com',
            'phone_number' => '61255555555',
        ]);
        DB::table('clients')->insert([
            'name' => 'Jesus',
            'lastname' => 'Cota',
            'email' => 'krazick23@gmail.com',
            'phone_number' => '61266666666',
        ]);
    }
}

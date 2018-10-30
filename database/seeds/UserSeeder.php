<?php

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
        \App\User::create([
            'user_name' => 'metrix',
            'email' => 'metrix',
            'password' => Hash::make('metrix123!')
        ]);
    }
}

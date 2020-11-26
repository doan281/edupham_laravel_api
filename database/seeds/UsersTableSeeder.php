<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::firstOrCreate(
            [ 'username' => 'doanpv' ],
            [
                'role_id' => 3,
                'email' => 'doanpv@dcv.vn',
                'password' => \Illuminate\Support\Facades\Hash::make('123456a@A'),
                'status' => 1
            ]
        );

    }
}

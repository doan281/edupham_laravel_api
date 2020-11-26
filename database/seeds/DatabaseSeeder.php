<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * php artisan make:seeder UsersTableSeeder
     * php artisan db:seed
     * php artisan db:seed --class=UsersTableSeeder
     * php artisan migrate:refresh --seed
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UsersTableSeeder::class,
        ]);
    }
}

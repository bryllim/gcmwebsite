<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Bryl Kezter Lim",
            'username' => "bryllim",
            'password' => Hash::make('password'),
        ]);
    }
}

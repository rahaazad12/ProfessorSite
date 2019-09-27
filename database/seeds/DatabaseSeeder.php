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
            'email' => 'shspanol12@gmail.com',
            'password' => bcrypt('shadi1374'),
        ]);
    }
}

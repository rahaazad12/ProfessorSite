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
            'name' => "shadi",
            'email' => 'shspanol@gmail.com',
            'password' => bcrypt('shadi1374'),
        ]);
    }
}

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'contact@argonstudio.ch',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'not-admin',
            'email' => 'loic@argonstudio.ch',
            'password' => bcrypt('password'),
        ]);
    }
}

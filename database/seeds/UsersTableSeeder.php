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
            ['name' => 'Loïc',
            'email' => 'loic@argonstudio.ch',
            'email_verified_at' => now(),
            'password' => bcrypt('3dm.2020'),
            'remember_token' => Str::random(10),],

            ['name' => 'Nathan',
            'email' => 'nathan.boder@3dm.ch',
            'email_verified_at' => now(),
            'password' => bcrypt('3dm.2020'),
            'remember_token' => Str::random(10),],

            ['name' => 'Michela',
            'email' => 'michela.parrini@3dm.ch',
            'email_verified_at' => now(),
            'password' => bcrypt('3dm.2020'),
            'remember_token' => Str::random(10),],

            ['name' => 'Lucien',
            'email' => 'lucien.boesiger@3dm.ch',
            'email_verified_at' => now(),
            'password' => bcrypt('3dm.2020'),
            'remember_token' => Str::random(10),],

            ['name' => 'Aline',
            'email' => 'aline.dauwalder@3dm.ch',
            'email_verified_at' => now(),
            'password' => bcrypt('3dm.2020'),
            'remember_token' => Str::random(10),],
        ]);
    }
}

<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'login' => 'admin',
            'first_name' => 'Levon',
            'last_name' => 'Karamyan',
            'email' => 'lyov.karamyan@gmail.com',
            'phone_number' => '093781272',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => Str::random(10),
        ]);
    }
}

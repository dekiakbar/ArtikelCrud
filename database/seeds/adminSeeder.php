<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Deki Akbar',
        	'email' => 'dekiakbar@linuxmail.org',
        	'password' => bcrypt("password")
        ]);
    }
}

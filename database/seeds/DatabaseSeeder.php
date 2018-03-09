<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(kategoriSeeder::class);
        $this->call(tagSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(artikelSeeder::class);
        $this->call(tamuSeeder::class);
    }
}

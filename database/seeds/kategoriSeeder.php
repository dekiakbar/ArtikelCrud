<?php

use Illuminate\Database\Seeder;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$limit = 10;
    	for($i=0;$i < $limit; $i++){
	        DB::table('kategori')->insert([
	            'nama_kategori' => str_random(10),
	            'slug' => str_random(10),
	        ]);
        }
    }
}

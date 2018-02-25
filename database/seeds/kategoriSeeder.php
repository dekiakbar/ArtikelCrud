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
        $nama = ['Pemrograman', 'Linux', 'Arduino', 'Elektronika'];
        $slug = ['pemrograman', 'linux','arduino', 'elektronika'];
    	$limit = count($nama);
    	for($i=0;$i < $limit; $i++){
	        DB::table('kategori')->insert([
	            'nama_kategori' => $nama[$i],
	            'slug' => $slug[$i],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
	        ]);
        }
    }
}

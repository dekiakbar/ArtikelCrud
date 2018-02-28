<?php

use Illuminate\Database\Seeder;
use App\Kategori;
class tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$kategori = Kategori::all();

    	$pemrograman = [ 'C', 'C++', 'PHP', 'CSS', 'HTML', 'Laravel', 'Yii', 'Code Igniter'];
    	$linux =[ 'Ubuntu', 'Debian', 'Kali Linux', 'Arch Linux', 'Redhat', 'Parrot OS'];
    	$elektronika = [ 'Skema', 'Resistor', 'PCB', 'Transistor', 'Capacitor'];
        $arduino = ['Arduino Uno','Arduino Mega','Arduino Duemilanov','Arduino Nano','Arduino pro Mini'];

    	function slug($data){
    		$hasil = strtolower((str_replace(' ','-',$data)));
    		return $hasil;
    	}

    	foreach ($kategori as $key => $kat) {
    		if ($kat->nama_kategori == 'Pemrograman') {
    			foreach ($pemrograman as $program) {
    				DB::table('tag')->insert([
		        	'nama_tag' => $program,
		        	'slug' => slug($program),
		        	'kategori_id' => $kat->id,
		        	'created_at' => date("Y-m-d H:i:s"),
		        	'updated_at' => date("Y-m-d H:i:s"),
	        		]);
    			}
    		}elseif ($kat->nama_kategori == 'Linux') {
    			foreach ($linux as $lin) {
    				DB::table('tag')->insert([
		        	'nama_tag' => $lin,
		        	'slug' => slug($lin),
		        	'kategori_id' => $kat->id,
		        	'created_at' => date("Y-m-d H:i:s"),
		        	'updated_at' => date("Y-m-d H:i:s"),
	        		]);
    			}
    		}elseif ($kat->nama_kategori == 'Elektronika') {
    			foreach ($elektronika as $elektronik) {
    				DB::table('tag')->insert([
		        	'nama_tag' => $elektronik,
		        	'slug' => slug($elektronik),
		        	'kategori_id' => $kat->id,
		        	'created_at' => date("Y-m-d H:i:s"),
		        	'updated_at' => date("Y-m-d H:i:s"),
	        		]);
    			}
    		}elseif ($kat->nama_kategori == 'Arduino') {
                foreach ($arduino as $ar) {
                    DB::table('tag')->insert([
                    'nama_tag' => $ar,
                    'slug' => slug($ar),
                    'kategori_id' => $kat->id,
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                    ]);
                }
            }
    	}
        
    }
}

<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class tamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users 		= [
    					'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0',
    					'Mozilla/5.0 (X11; Window; window x86_64; rv:57.0) Gecko/20100101 Firefox/57.0'
    			  	  ];
    	$browsers	= ['UC Browser','Firefox','Chrome','Iceweals','Safari'];
    	$oses		= ['MacOS','Linux','Window'];
        
    	foreach($browsers as $bro => $browser){
    		foreach($oses as $o => $os){
    			foreach($users as $us => $user){
    				foreach(range(1, 10) as $index) {
    					
    					$tgl = Carbon::create(2018, 1, 1, 0, 0, 0);
    				
    					DB::table('tamu')->insert([
        					'user' => $user,
        					'browser' => $browser,
        					'os' => $os,
        					'created_at' => $tgl->addMonth(rand(1, 12))->format('Y-m-d H:i:s'),
        					'updated_at' => $tgl->addMonth(rand(1, 12))->format('Y-m-d H:i:s'),
        				]);
        			}
    			}
    		}
    	}
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('roles')->insert([
        	
        	[
        		'id' => 1,
        		'name' => 'superadmin',     
        		'guard_name' =>'web',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,
        		'name' => 'FO',     
        		'guard_name' =>'web',           		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
                 
            [
        		'id' => 3,
        		'name' => 'BPO',     
        		'guard_name' =>'web',           		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],                  
        ]);
    
    }
}


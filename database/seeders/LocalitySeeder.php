<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Locality;
use App\Models\Location;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Empty the table first
       DB::statement('SET FOREIGN_KEY_CHECKS=0');
       Locality::truncate();
       DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //…
        
        //Define data
       $localities = [
            [ 
            'id'=>'1000',
            'locality'=>'Bruxelles',
            ],
        ];
        
        //Insert data in the table
        DB::table('localities')->insert($localities);
    }
}
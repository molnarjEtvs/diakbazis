<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BeszeltNyelv;

class BeszeltNyelvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = database_path('example_data\diak_beszelt_nyelvek.txt');
        $fajl = fopen($path,"r");
        while(!feof($fajl)){
            $sor = fgets($fajl);
            $adatok = explode(",",$sor);
            $bnyelv = new BeszeltNyelv;
            $bnyelv->d_id = trim($adatok[1]);
            $bnyelv->ny_id = trim($adatok[2]);
            $bnyelv->save();
        }
        fclose($fajl);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nyelv;

class NyelvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = database_path('example_data\nyelvek.txt');
        $fajl = fopen($path,"r");
        while(!feof($fajl)){
            $sor = fgets($fajl);
            $adatok = explode(",",$sor);
            $nyelv = new Nyelv;
            $nyelv->nyelv = trim($adatok[1]);
            $nyelv->save();
        }
        fclose($fajl);
    }
}

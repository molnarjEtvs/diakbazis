<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Telepules;

class TelepulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = database_path('example_data\telepulesek.txt');
        $fajl = fopen($path,"r");
        while(!feof($fajl)){
            $sor = fgets($fajl);
            $adatok = explode(",",$sor);
            $telepules = new Telepules;
            $telepules->nev = trim($adatok[1]);
            $telepules->save();
        }
        fclose($fajl);
    }
}

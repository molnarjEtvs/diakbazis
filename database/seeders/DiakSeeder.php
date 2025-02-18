<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diak;

class DiakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = database_path('example_data\diakok.txt');
        $fajl = fopen($path,"r");
        while(!feof($fajl)){
            $sor = fgets($fajl);
            $adatok = explode(",",$sor);
            $diak = new Diak;
            $diak->nev = trim($adatok[1]);
            $diak->szuletesi_datum = trim($adatok[2]);
            $diak->email = trim($adatok[3]);
            $diak->telefonszam = trim($adatok[4]);
            $diak->t_id = trim($adatok[5]);
            $diak->save();
        }
        fclose($fajl);
    }
}

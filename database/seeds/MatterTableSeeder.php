<?php

use App\Matter;
use Illuminate\Database\Seeder;

class MatterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matter = Matter::create([
            "matter" => "Mathématique" ,
            "title" => "Venez jouer avec les nombres !" ,
            "content" => "Les mathématiques (ou la mathématique) sont un ensemble de connaissances abstraites 
            résultant de raisonnements logiques appliqués à des objets divers tels que les ensembles mathématiques, 
            les nombres, les formes, les structures, les transformations, etc. ; ainsi qu'aux relations et opérations mathématiques 
            qui existent entre ces objets." ,
            "hourPrice" => 50,
            "yearReduction" => 10,
            "extraReduction" => 5,
        ]);
    }
}

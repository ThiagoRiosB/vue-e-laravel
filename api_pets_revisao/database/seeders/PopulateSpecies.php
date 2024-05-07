<?php

namespace Database\Seeders;

use App\Models\Specie;
use Illuminate\Database\Seeder;

class PopulateSpecies extends Seeder
{
    

     const SPECIES = [
        'Cachorro',
        'Gato',
        'Coelho',
        'Peixe',
        'Ave'
    ];

    public function run(): void
    {

        foreach (self::SPECIES as $specie) {
            Specie::FirstOrCreate(['name' => $specie]);
        }
    }
}

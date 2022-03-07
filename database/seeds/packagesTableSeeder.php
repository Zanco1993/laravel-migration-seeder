<?php

use App\Package;
use Illuminate\Database\Seeder;

class packagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // utilizzo inizialmente dei valori statici non creati da faker
        // creo una riga quindi creo un'istanza del Model Package importato
        $newPackage = new Package();
        $newPackage->name = 'Avventura'; 
        $newPackage->location = 'Mexico';
        $newPackage->costs = 100;
        $newPackage->save();

    }
}

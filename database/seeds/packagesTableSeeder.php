<?php

use Faker\Generator as Faker;
use App\Package;
use Illuminate\Database\Seeder;

class packagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     // utilizzo inizialmente dei valori statici non creati da faker
    //     // creo una riga quindi creo un'istanza del Model Package importato

    //     $newPackage = new Package();
    //     $newPackage->name = 'Avventura'; 
    //     $newPackage->location = 'Mexico';
    //     $newPackage->costs = 100;
    //     $newPackage->save();

    // }

    public function run(Faker $faker)
    {
        // utilizzo faker

        for ($i = 0; $i < 100; $i++) {

            $newPackage = new Package();
            $newPackage->name = $faker->name();
            $newPackage->location = $faker->word();
            $newPackage->num_people = $faker->numberBetween(1, 20);
            $newPackage->costs = $faker->numberBetween(50, 300);
            $newPackage->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       for($i = 0; $i < 20; $i++) {
          $newTrain = new Train();
          $newTrain->azienda              = $faker->name();
          $newTrain->codice_treno         = $faker->ean8();
          $newTrain->immagine_treno       = $faker->imageUrl(70,70, 'trains', true);
          $newTrain->stazione_di_partenza = $faker->city();
          $newTrain->stazione_di_arrivo   = $faker->city();
          $newTrain->orario_di_partenza   = $faker->dateTimeBetween('-1 day', '+1 day');
          $newTrain->orario_di_arrivo     = $faker->dateTimeBetween('+2 day', '+3 day');
          $newTrain->numero_carrozze      = $faker->numberBetween(3, 40);
          $newTrain->in_orario            = $faker->boolean();
          $newTrain->cancellato           = $faker->boolean();
          $newTrain->save();
       }
    }
}

<?php

use Illuminate\Database\Seeder;

class CategoriesTablesSeeder extends Seeder
{
    /**
     * Seed the categories of renders.
     *
     * @return void
     */
     public function run()
     {
         DB::table('types')->delete();
         DB::table('types')->insert([
             ['name' => 'Intérieur',],
             ['name' => 'Extérieur',],
         ]);

         DB::table('styles')->delete();
         DB::table('styles')->insert([
             ['name' => 'Réaliste',],
             ['name' => 'Graphique',],
             ['name' => 'Peinture',],
             ['name' => 'Illustration',],
             ['name' => 'Maquette',],
         ]);

         DB::table('seasontimes')->delete();
         DB::table('seasontimes')->insert([
             ['name' => 'Printemps',],
             ['name' => 'Été',],
             ['name' => 'Automne',],
             ['name' => 'Hiver',],
         ]);

         DB::table('weathers')->delete();
         DB::table('weathers')->insert([
             ['name' => 'Dégagé',],
             ['name' => 'Nuageux',],
             ['name' => 'Pluvieux',],
         ]);

         DB::table('daytimes')->delete();
         DB::table('daytimes')->insert([
             ['name' => 'Matin',],
             ['name' => 'Milieu journée',],
             ['name' => 'Soir',],
             ['name' => 'Nuit',],
         ]);

         DB::table('lights')->delete();
         DB::table('lights')->insert([
             ['name' => 'Diffuse',],
             ['name' => 'Direct',],
             ['name' => 'Spot',],
             ['name' => 'Artificielle',],
         ]);

         DB::table('compositions')->delete();
         DB::table('compositions')->insert([
             ['name' => 'Central',],
             ['name' => 'Frontal',],
             ['name' => 'Drone',],
             ['name' => 'Vertical',],
         ]);

         DB::table('assignements')->delete();
         DB::table('assignements')->insert([
             ['name' => 'Logement',],
             ['name' => 'Public',],
             ['name' => 'Commercial',],
             ['name' => 'EMS',],
             ['name' => 'École',],
             ['name' => 'Culture',],
             ['name' => 'Urbanisme',],
         ]);

        //
    }
}

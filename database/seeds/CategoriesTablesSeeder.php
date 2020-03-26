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
             ['name' => 'Intérieur',
              'tag' => 'interieur',],
             ['name' => 'Extérieur',
              'tag' => 'exterieur',],
         ]);

         DB::table('styles')->delete();
         DB::table('styles')->insert([
             ['name' => 'Réaliste',
              'tag' => 'realiste',],
             ['name' => 'Graphique',
              'tag' => 'graphique',],
             ['name' => 'Peinture',
              'tag' => 'peinture',],
             ['name' => 'Illustration',
              'tag' => 'illustration',],
             ['name' => 'Maquette',
              'tag' => 'maquette',],
         ]);

         DB::table('seasontimes')->delete();
         DB::table('seasontimes')->insert([
             ['name' => 'Printemps',
              'tag' => 'printemps',],
             ['name' => 'Été',
              'tag' => 'ete',],
             ['name' => 'Automne',
              'tag' => 'automne',],
             ['name' => 'Hiver',
              'tag' => 'hiver',],
         ]);

         DB::table('weathers')->delete();
         DB::table('weathers')->insert([
             ['name' => 'Dégagé',
              'tag' => 'degage',],
             ['name' => 'Nuageux',
              'tag' => 'nuageux',],
             ['name' => 'Pluvieux',
              'tag' => 'pluvieux',],
         ]);

         DB::table('daytimes')->delete();
         DB::table('daytimes')->insert([
             ['name' => 'Matin',
              'tag' => 'matin',],
             ['name' => 'Milieu journée',
              'tag' => 'millieu-journee',],
             ['name' => 'Soir',
              'tag' => 'soir',],
             ['name' => 'Nuit',
              'tag' => 'nuit',],
         ]);

         DB::table('lights')->delete();
         DB::table('lights')->insert([
             ['name' => 'Diffuse',
              'tag' => 'diffuse',],
             ['name' => 'Direct',
              'tag' => 'direct',],
             ['name' => 'Spot',
              'tag' => 'spot',],
             ['name' => 'Artificielle',
              'tag' => 'artificielle',],
         ]);

         DB::table('compositions')->delete();
         DB::table('compositions')->insert([
             ['name' => 'Central',
              'tag' => 'central',],
             ['name' => 'Frontal',
              'tag' => 'frontal',],
             ['name' => 'Drone',
              'tag' => 'drone',],
             ['name' => 'Vertical',
              'tag' => 'vertical',],
         ]);

         DB::table('assignements')->delete();
         DB::table('assignements')->insert([
             ['name' => 'Logement',
              'tag' => 'logement',],
             ['name' => 'Public',
              'tag' => 'public',],
             ['name' => 'Commercial',
              'tag' => 'commercial',],
             ['name' => 'EMS',
              'tag' => 'ems',],
             ['name' => 'École',
              'tag' => 'ecole',],
             ['name' => 'Culture',
              'tag' => 'culture',],
             ['name' => 'Urbanisme',
              'tag' => 'urbanisme',],
         ]);

        //
    }
}

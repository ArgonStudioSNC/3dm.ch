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
         DB::table('offices')->delete();
         DB::table('offices')->insert([
             ['id' => 1,
              'name' => 'MIR',
              'tag' => 'mir',],
             ['id' => 2,
              'name' => 'Filippo Bolognese',
              'tag' => 'filippo-bolognese',],
             ['id' => 3,
              'name' => 'maaars',
              'tag' => 'maaars',],
             ['id' => 4,
              'name' => 'Guachinarte',
              'tag' => 'guachinarte',],
             ['id' => 5,
              'name' => 'Bildbauer',
              'tag' => 'bildbauer',],
             ['id' => 6,
              'name' => 'ONIRISM',
              'tag' => 'onirism',],
             ['id' => 7,
              'name' => 'Nightnurse',
              'tag' => 'nightnurse',],
             ['id' => 8,
              'name' => 'Brunecky',
              'tag' => 'brunecky',],
             ['id' => 9,
              'name' => 'Loomn',
              'tag' => 'loomn',],
             ['id' => 10,
              'name' => 'Bloomimages',
              'tag' => 'bloomimages',],
         ]);

         DB::table('types')->delete();
         DB::table('types')->insert([
             ['id' => 1,
              'name' => 'Intérieur',
              'tag' => 'interieur',],
             ['id' => 2,
              'name' => 'Extérieur',
              'tag' => 'exterieur',],
         ]);

         DB::table('styles')->delete();
         DB::table('styles')->insert([
             ['id' => 1,
              'name' => 'Réaliste',
              'tag' => 'realiste',],
             ['id' => 2,
              'name' => 'Graphique',
              'tag' => 'graphique',],
             ['id' => 3,
              'name' => 'Peinture',
              'tag' => 'peinture',],
             ['id' => 4,
              'name' => 'Illustration',
              'tag' => 'illustration',],
             ['id' => 5,
              'name' => 'Maquette',
              'tag' => 'maquette',],
         ]);

         DB::table('seasontimes')->delete();
         DB::table('seasontimes')->insert([
             ['id' => 1,
              'name' => 'Printemps',
              'tag' => 'printemps',],
             ['id' => 2,
              'name' => 'Été',
              'tag' => 'ete',],
             ['id' => 3,
              'name' => 'Automne',
              'tag' => 'automne',],
             ['id' => 4,
              'name' => 'Hiver',
              'tag' => 'hiver',],
         ]);

         DB::table('weathers')->delete();
         DB::table('weathers')->insert([
             ['id' => 1,
              'name' => 'Dégagé',
              'tag' => 'degage',],
             ['id' => 2,
              'name' => 'Nuageux',
              'tag' => 'nuageux',],
             ['id' => 3,
              'name' => 'Pluvieux',
              'tag' => 'pluvieux',],
         ]);

         DB::table('daytimes')->delete();
         DB::table('daytimes')->insert([
             ['id' => 1,
              'name' => 'Matin',
              'tag' => 'matin',],
             ['id' => 2,
              'name' => 'Milieu journée',
              'tag' => 'millieu-journee',],
             ['id' => 3,
              'name' => 'Soir',
              'tag' => 'soir',],
             ['id' => 4,
              'name' => 'Nuit',
              'tag' => 'nuit',],
         ]);

         DB::table('lights')->delete();
         DB::table('lights')->insert([
             ['id' => 1,
              'name' => 'Diffuse',
              'tag' => 'diffuse',],
             ['id' => 2,
              'name' => 'Direct',
              'tag' => 'direct',],
             ['id' => 3,
              'name' => 'Spot',
              'tag' => 'spot',],
             ['id' => 4,
              'name' => 'Artificielle',
              'tag' => 'artificielle',],
         ]);

         DB::table('compositions')->delete();
         DB::table('compositions')->insert([
             ['id' => 1,
              'name' => 'Central',
              'tag' => 'central',],
             ['id' => 2,
              'name' => 'Frontal',
              'tag' => 'frontal',],
             ['id' => 3,
              'name' => 'Drone',
              'tag' => 'drone',],
             ['id' => 4,
              'name' => 'Vertical',
              'tag' => 'vertical',],
         ]);

         DB::table('assignements')->delete();
         DB::table('assignements')->insert([
             ['id' => 1,
              'name' => 'Logement',
              'tag' => 'logement',],
             ['id' => 2,
              'name' => 'Public',
              'tag' => 'public',],
             ['id' => 3,
              'name' => 'Commercial',
              'tag' => 'commercial',],
             ['id' => 4,
              'name' => 'EMS',
              'tag' => 'ems',],
             ['id' => 5,
              'name' => 'École',
              'tag' => 'ecole',],
             ['id' => 6,
              'name' => 'Culture',
              'tag' => 'culture',],
             ['id' => 7,
              'name' => 'Urbanisme',
              'tag' => 'urbanisme',],
         ]);

         DB::table('countries')->delete();
         DB::table('countries')->insert([
             ['code' => 'ch',
              'name' => 'Suisse',
              'tag' => 'suisse',],
         ]);

        //
    }
}

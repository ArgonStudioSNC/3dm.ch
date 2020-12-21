<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Render;

class CountriesToGeoCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Importer manuellement la base de donnée des pays depuis https://inkplant.com/code/countries-mysql-table avant de procéder à la migration
        Schema::table('renders', function (Blueprint $table) {
            $table->dropForeign(['country_code']);

            Render::where('country_code', 'ch')
            ->update(['country_code' => 'CH']);

            $table->foreign('country_code')
            ->references('abv')->on('geo_countries')
            ->onDelete('restrict');
        });

        Schema::dropIfExists('countries');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // NOT TESTED
        Schema::table('renders', function (Blueprint $table) {
            $table->dropForeign(['country_code']);

            Render::where('country_code', '<>', 'CH')
            ->update(['country_code' => null]);

            Render::where('country_code', 'CH')
            ->update(['country_code' => 'ch']);

            Schema::create('countries', function (Blueprint $table) {
                $table->string('code')->primary();
                $table->string('name');
            });

            $table->foreign('country_code')
            ->references('code')->on('countries')
            ->onDelete('restrict');
        });
    }
}

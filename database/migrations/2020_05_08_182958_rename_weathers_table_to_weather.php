<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameWeathersTableToWeather extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('renders', function (Blueprint $table) {
            $table->dropForeign(['weather_id']);

            Schema::rename('weathers', 'weather');

            $table->foreign('weather_id')
            ->references('id')->on('weather')
            ->onDelete('restrict');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('renders', function (Blueprint $table) {
            $table->dropForeign(['weather_id']);

            Schema::rename('weather', 'weathers');

            $table->foreign('weather_id')
            ->references('id')->on('weathers')
            ->onDelete('restrict');
        });
    }
}

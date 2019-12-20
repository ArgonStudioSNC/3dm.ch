<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('office_id')->nullable()->index();
            $table->year('year')->nullable();
            $table->unsignedBigInteger('type_id')->nullable()->index();
            $table->unsignedBigInteger('style_id')->nullable()->index();
            $table->unsignedBigInteger('seasontime_id')->nullable()->index();
            $table->unsignedBigInteger('weather_id')->nullable()->index();
            $table->unsignedBigInteger('daytime_id')->nullable()->index();
            $table->unsignedBigInteger('light_id')->nullable()->index();
            $table->unsignedBigInteger('composition_id')->nullable()->index();
            $table->unsignedBigInteger('assignement_id')->nullable()->index();
            $table->string('country_code')->nullable()->index();
            $table->string('filename');
            $table->timestamps();

            $table->foreign('office_id')
            ->references('id')->on('offices')
            ->onDelete('restrict');

            $table->foreign('type_id')
            ->references('id')->on('types')
            ->onDelete('restrict');

            $table->foreign('style_id')
            ->references('id')->on('styles')
            ->onDelete('restrict');

            $table->foreign('seasontime_id')
            ->references('id')->on('seasontimes')
            ->onDelete('restrict');

            $table->foreign('weather_id')
            ->references('id')->on('weathers')
            ->onDelete('restrict');

            $table->foreign('daytime_id')
            ->references('id')->on('daytimes')
            ->onDelete('restrict');

            $table->foreign('light_id')
            ->references('id')->on('lights')
            ->onDelete('restrict');

            $table->foreign('composition_id')
            ->references('id')->on('compositions')
            ->onDelete('restrict');

            $table->foreign('assignement_id')
            ->references('id')->on('assignements')
            ->onDelete('restrict');

            $table->foreign('country_code')
            ->references('code')->on('countries')
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
        Schema::dropIfExists('renders');
    }
}

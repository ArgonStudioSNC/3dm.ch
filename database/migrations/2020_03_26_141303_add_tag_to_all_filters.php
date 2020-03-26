<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTagToAllFilters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offices', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('types', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('styles', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('seasontimes', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('weathers', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('daytimes', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('lights', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('compositions', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('assignements', function (Blueprint $table) { $table->string('tag')->unique(); });
        Schema::table('countries', function (Blueprint $table) { $table->string('tag')->unique(); });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offices', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('types', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('styles', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('seasontimes', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('weathers', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('daytimes', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('lights', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('compositions', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('assignements', function (Blueprint $table) { $table->dropColumn('tag'); });
        Schema::table('countries', function (Blueprint $table) { $table->dropColumn('tag'); });
    }
}

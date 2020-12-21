<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTagToSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offices', function (Blueprint $table) {      $table->renameColumn('tag', 'slug'); });
        Schema::table('types', function (Blueprint $table) {        $table->renameColumn('tag', 'slug'); });
        Schema::table('styles', function (Blueprint $table) {       $table->renameColumn('tag', 'slug'); });
        Schema::table('seasontimes', function (Blueprint $table) {  $table->renameColumn('tag', 'slug'); });
        Schema::table('weather', function (Blueprint $table) {      $table->renameColumn('tag', 'slug'); });
        Schema::table('daytimes', function (Blueprint $table) {     $table->renameColumn('tag', 'slug'); });
        Schema::table('lights', function (Blueprint $table) {       $table->renameColumn('tag', 'slug'); });
        Schema::table('compositions', function (Blueprint $table) { $table->renameColumn('tag', 'slug'); });
        Schema::table('assignements', function (Blueprint $table) { $table->renameColumn('tag', 'slug'); });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offices', function (Blueprint $table) {      $table->renameColumn('slug', 'tag'); });
        Schema::table('types', function (Blueprint $table) {        $table->renameColumn('slug', 'tag'); });
        Schema::table('styles', function (Blueprint $table) {       $table->renameColumn('slug', 'tag'); });
        Schema::table('seasontimes', function (Blueprint $table) {  $table->renameColumn('slug', 'tag'); });
        Schema::table('weather', function (Blueprint $table) {      $table->renameColumn('slug', 'tag'); });
        Schema::table('daytimes', function (Blueprint $table) {     $table->renameColumn('slug', 'tag'); });
        Schema::table('lights', function (Blueprint $table) {       $table->renameColumn('slug', 'tag'); });
        Schema::table('compositions', function (Blueprint $table) { $table->renameColumn('slug', 'tag'); });
        Schema::table('assignements', function (Blueprint $table) { $table->renameColumn('slug', 'tag'); });
    }
}

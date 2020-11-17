<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UgradeLaravel8 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('failed_jobs', function (Blueprint $table) {
             $table->string('uuid')->after('id')->nullable()->unique();
         });

         DB::table('failed_jobs')->whereNull('uuid')->cursor()->each(function ($job) {
             DB::table('failed_jobs')
             ->where('id', $job->id)
             ->update(['uuid' => (string) Illuminate\Support\Str::uuid()]);
         });

         Schema::table('oauth_clients', function (Blueprint $table) {
             $table->string('provider')->after('secret')->nullable();
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

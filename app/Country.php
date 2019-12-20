<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
        /**
         * The primary key associated with the table.
         *
         * @var string
         */
        protected $primaryKey = 'code';

        /**
         * Indicates if the IDs are auto-incrementing.
         *
         * @var bool
         */
        public $incrementing = false;


        /**
         * The "type" of the auto-incrementing ID.
         *
         * @var string
         */
        protected $keyType = 'string';


        /**
         * Indicates if the model should be timestamped.
         *
         * @var bool
         */
        public $timestamps = false;

        //
}

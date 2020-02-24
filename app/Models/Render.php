<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Render extends Model
{
    protected $table = 'renders';

    /**
     * Retourne le bureau qui a réalisé le rendu.
     */
    public function office()
    {
        return $this->hasOne('App\Models\Office');
    }

    /**
     * Retourne le type de rendu.
     */
    public function type()
    {
        return $this->hasOne('App\Models\Type');
    }

    /**
     * Retourne le style de rendu.
     */
    public function style()
    {
        return $this->hasOne('App\Models\style');
    }

    /**
     * Retourne la saison de l'année du rendu.
     */
    public function seasontime()
    {
        return $this->hasOne('App\Models\seasontime');
    }

    /**
     * Retourne la météo sur le rendu.
     */
    public function weather()
    {
        return $this->hasOne('App\Models\weather');
    }

    /**
     * Retourne la période de la journée sur le rendu.
     */
    public function daytime()
    {
        return $this->hasOne('App\Models\daytime');
    }

    /**
     * Retourne les conditions d'éclairage du rendu.
     */
    public function light()
    {
        return $this->hasOne('App\Models\light');
    }

    /**
     * Retourne le type de composition du rendu.
     */
    public function composition()
    {
        return $this->hasOne('App\Models\composition');
    }

    /**
     * Retourne l'utilisation du bâtiment sur le rendu.
     */
    public function assignement()
    {
        return $this->hasOne('App\Models\assignement');
    }

    /**
     * Retourne le pays représenté sur rendu.
     */
    public function country()
    {
        return $this->hasOne('App\Models\country', 'code', 'country_code');
    }

}

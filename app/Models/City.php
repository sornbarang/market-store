<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use Translatable;

    protected $table = 'cities';
    public $translationModel = 'App\Models\CityTranslation';
    public $translatedAttributes = ['name', 'slug'];


    public function state(){
        return $this->belongsTo('App\Models\State');
    }
}

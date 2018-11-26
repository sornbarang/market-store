<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	use Translatable;
    
    protected $table = 'states';
    public $translationModel = 'App\Models\StateTranslation';
    public $translatedAttributes = ['name', 'slug'];

    public function country(){
        return $this->belongsTo('App\Models\Country');
    }

    public function cities()
    {
        return $this->hasMany('App\Models\City', 'state_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Country extends Model
{
    use Translatable;
    public $translationModel = 'App\Models\CountryTranslation';
    protected $table = 'countries';
    public $translatedAttributes = ['name', 'slug'];
    protected $fillable = ['code'];
    

}

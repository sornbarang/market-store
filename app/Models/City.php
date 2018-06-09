<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use \Dimsav\Translatable\Translatable;
    
    protected $table = 'cities';
    public $translatedAttributes = ['name'];
    protected $fillable = ['code'];
}

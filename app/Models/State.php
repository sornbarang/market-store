<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	use \Dimsav\Translatable\Translatable;
    
    protected $table = 'states';
    public $translatedAttributes = ['name'];
    protected $fillable = ['code'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
class Product extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $fillable = ['name','price','image','description','active'];
    
}

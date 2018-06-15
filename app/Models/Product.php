<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Ghanem\Reportable\Contracts\Reportable;
use Ghanem\Reportable\Traits\Reportable as ReportableTrait;
class Product extends Model implements HasMedia,Reportable
{
    use HasMediaTrait;
    use ReportableTrait;
    protected $fillable = ['name','price','image','description','active'];
    
}

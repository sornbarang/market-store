<?php

namespace App\Models;

use App\Traits\Translatable;
use CyrildeWit\EloquentViewable\Viewable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class ProductsAds extends Model implements HasMedia
{
    use Translatable;

    use Viewable;

    use HasMediaTrait;
    
    protected $table = 'products_ads';
    public $translatedAttributes = ['name', 'description', 'slug'];
    protected $fillable = ['name','price','discount','description','active','user_id'];
    public function categories_ads() {
        return $this->belongsToMany('App\Models\CategoriesAds', 'products_ads_categories_ads', 'products_ads_id', 'categories_ads_id');
    }

}

<?php

namespace App\Models;

use App\Traits\Translatable;
use CyrildeWit\EloquentViewable\Viewable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;
use App\Models\CategoriesAds as Category ;
use Ghanem\Reportable\Contracts\Reportable;
use Ghanem\Reportable\Traits\Reportable as ReportableTrait;
class ProductsAds extends Model implements HasMedia,Reportable
{
    use Translatable;

    use Viewable;

    use HasMediaTrait;

    use ReportableTrait;
    
    protected $table = 'products_ads';
    public $translatedAttributes = ['name', 'description', 'slug'];
    protected $fillable = ['name','price','discount','description','active','user_id'];
    public function categories_ads() {
        return $this->belongsToMany('App\Models\CategoriesAds', 'products_ads_categories_ads', 'products_ads_id', 'categories_ads_id');
    }
    public function scopeCategorized($query, Category $category=null) {
        if ( is_null($category) ) return $query->with('categories_ads');
    
        $categoryIds = $category->getDescendantsAndSelf();
    
        return $query->with('categories_ads')
          ->join('products_ads_categories_ads', 'products_ads_categories_ads.products_ads_id', '=', 'products_ads.id')
          ->whereIn('products_ads_categories_ads.categories_ads_id', $categoryIds);
    }
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
        ->width(800)
        ->height(800) 
        ->sharpen(10); 
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

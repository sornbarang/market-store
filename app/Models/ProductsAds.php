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
use Nicolaslopezj\Searchable\SearchableTrait;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\SoftDeletes;
class ProductsAds extends Model implements HasMedia,Reportable
{
    use Translatable;

    use Viewable;

    use HasMediaTrait;

    use ReportableTrait;
    
    use SearchableTrait;
    
    use Rateable;

    use SoftDeletes;
    protected $table = 'products_ads';
    protected $dates = ['deleted_at'];
    public $translatedAttributes = ['name', 'description', 'slug'];
    protected $fillable = ['name','price','discount','description','active','user_id'];
    public function categories_ads() {
        return $this->belongsToMany('App\Models\CategoriesAds', 'products_ads_categories_ads', 'products_ads_id', 'categories_ads_id');
    }
    public function scopeCategorized($query, Category $category=null) {
        if ( is_null($category) ) return $query->with('categories_ads'); 
        $categoryIds = $category->getDescendantsAndSelf()->pluck('id'); 
        return $query->with('categories_ads')->select('*','products_ads_categories_ads.products_ads_id as id')
          ->join('products_ads_categories_ads', 'products_ads_categories_ads.products_ads_id', '=', 'products_ads.id')
          ->join('products_ads_translations', 'products_ads_translations.products_ads_id', '=', 'products_ads.id')
          ->where('products_ads_translations.locale',app()->getLocale())
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
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = is_numeric($value)?$value:0;
    }
    public function setDiscountAttribute($value)
    {
        $this->attributes['discount'] = is_numeric($value)?$value:0;
    }
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'users.name' => 10,
            'users.first_name' => 9,
            'users.last_name' => 8,
            'profiles.bio' => 2,
            'users.email' => 5,
            'products_ads.price' => 2,
            'products_ads_translations.name' => 2,
            'products_ads_translations.description' => 2
        ],
        'joins' => [ 
            'users' => ['products_ads.user_id','users.id'],
            'profiles' => ['users.id','profiles.user_id'],
            'products_ads_translations' => ['products_ads.id','products_ads_translations.products_ads_id'],
        ],
    ];
}

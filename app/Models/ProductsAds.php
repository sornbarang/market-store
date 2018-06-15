<?php

namespace App\Models;

use App\Traits\Translatable;
use CyrildeWit\EloquentViewable\Viewable;
use Illuminate\Database\Eloquent\Model;


class ProductsAds extends Model
{
    use Translatable;
    use Viewable;

    protected $table = 'products_ads';
    public $translatedAttributes = ['name', 'description', 'slug'];

    public function categories_ads() {
        return $this->belongsToMany('App\Models\CategoriesAds', 'products_ads_categories_ads', 'products_ads_id', 'categories_ads_id');
    }

}

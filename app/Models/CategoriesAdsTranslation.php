<?php

namespace App\Models;

/*use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;*/

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class CategoriesAdsTranslation extends Model
{
//    use HasSlug;
    use Sluggable;
    protected $table = 'categories_ads_translations';
    protected $fillable = ['name', 'slug'];
    public $timestamps = false;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function scopeFindSimilarSlugs( Builder $query, string $attribute, array $config, string $slug ): Builder {
        $separator = $config['separator'];
        $locale    = $this->locale;

        return $query->where( function ( Builder $q ) use ( $attribute, $slug, $separator, $locale ) {
            $q->where( $attribute, '=', $slug )
              ->where( 'locale', '=', $locale )
              ->orWhere( $attribute, 'LIKE', $slug . $separator . '%' );
        } );
    }

    /*public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->usingLanguage('km');
    }*/
}

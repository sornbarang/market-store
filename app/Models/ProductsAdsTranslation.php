<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ProductsAdsTranslation extends Model
{
    use Sluggable;
    protected $table = 'products_ads_translations';
    protected $fillable = ['name', 'description',  'slug'];
    public $timestamps = false;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
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
}

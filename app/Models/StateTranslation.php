<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class StateTranslation extends Model
{
    use Sluggable;
    protected $table = 'states_translations';
    public $timestamps = false;
    protected $fillable = ['name', 'slug'];


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
}

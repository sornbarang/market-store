<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Wildside\Userstamps\Userstamps;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Nicolaslopezj\Searchable\SearchableTrait;


class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use HasSlug;
    use SoftDeletes;
    use Userstamps;
    // use SearchableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'last_name', 'email', 'password', 'provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * Set the user's password.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value){

        $this->attributes['password'] = bcrypt($value);

    }
    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function productads()
    {
        return $this->hasMany('App\Models\ProductsAds');
    }
    // /**
    //  * Searchable rules.
    //  *
    //  * @var array
    //  */
    // protected $searchable = [
    //     /**
    //      * Columns and their priority in search results.
    //      * Columns with higher values are more important.
    //      * Columns with equal values have equal importance.
    //      *
    //      * @var array
    //      */
    //     'columns' => [
    //         'users.name' => 10,
    //         'users.first_name' => 9,
    //         'users.last_name' => 8,
    //         'profiles.bio' => 2,
    //         'users.email' => 5,
    //         'products_ads.price' => 2,
    //         'products_ads_translations.name' => 2,
    //         'products_ads_translations.description' => 2
    //     ],
    //     'joins' => [
    //         'profiles' => ['users.id','profiles.user_id'],
    //         'products_ads' => ['users.id','products_ads.user_id'],
    //         'products_ads_translations' => ['products_ads.id','products_ads_translations.products_ads_id'],
    //     ],
    // ];
}

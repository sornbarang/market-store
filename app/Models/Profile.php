<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;
class Profile extends Model implements HasMedia
{
    use SoftDeletes;
    
    use HasMediaTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'location', 'gender','date_of_birth', 'bio',
    ];
    /**
     * A profile belongs to a user
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

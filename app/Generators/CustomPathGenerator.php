<?php

namespace App\Generators;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;
use App\Models\Message;
class CustomPathGenerator implements PathGenerator
{
    public function getPath(Media $media) : string
    {
        if (str_replace('App\\', '', $media->model_type) =='Models\Message') {
            return $media->collection_name . '/' . $media->id .'/';
        }
        return $media->id.'/';
        // return $media->collection_name . '/' . $media->id .'/';
        // return str_replace('App\\', '', $media->model_type) . '/' . $media->collection_name . '/' . $media->id .'/';
    }

    public function getPathForConversions(Media $media) : string
    {
        return $this->getPath($media).'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'responsives/';
    }
}
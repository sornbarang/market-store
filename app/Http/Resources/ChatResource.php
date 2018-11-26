<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
class ChatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $mediaItems = $this->message->getMedia();
        $images=[];
        foreach ($mediaItems as $key => $media) {
            $images[]=asset(Storage::url($media->id.'/'.$media->file_name)); 
        } 
        return [
            'message' => $this->message['content'],
            'id' => $this->id,
            'type' => $this->type,
            'images'=>$images,
            'read_at' => $this->read_at_timing($this),
            'send_at' => $this->created_at->diffForHumans()
        ];
    }

    private function read_at_timing($_this)
    {
        $read_at = $_this->type == 0 ? $_this->read_at : null;
        return $read_at ? $read_at->diffForHumans() : null;
    }
}

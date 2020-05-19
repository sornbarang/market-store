<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductsAds; 
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
        $avatar=null; 
        if(null !== $this->user->profile){
            $medias = $this->user->profile->getMedia();  
            foreach($medias as $val){   
                if($this->user->profile->avatar == $val->id){
                    $avatar=Storage::disk('dospace')->url($val->id.'/'.$val->file_name);  
                }
            } 
        }
        $images=[];
        if($this->message['content']=='file'){
            $mediaItems = $this->message->getMedia('chats');
            // dd($mediaItems);
            foreach ($mediaItems as $key => $media) {
                $images[]=asset(Storage::disk('dospace')->url($media->collection_name.'/'.$media->id.'/'.$media->file_name)); 
            } 
        }
        return [
            'message' => $this->message['content'],
            'id' => $this->id,
            'type' => $this->type,
            'images'=>$images,
            'profile'=>$avatar,
            'date'=>$this->created_at,
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

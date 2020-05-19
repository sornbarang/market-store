<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Session;
use App\Models\ProductsAds;
use Storage;
class UserResource extends JsonResource
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
        $img = null;
        $media=[];
        $products= ProductsAds::where('user_id',$this->id)->latest()->limit(5)->inRandomOrder()->get();
        foreach($products as $v){
            if($v->getFirstMedia()){
                $img = Storage::disk('dospace')->url($v->getFirstMedia()->id.'/'.$v->getFirstMedia()->file_name);
            }
            $media[]=['media'=>$img,'link'=>route('market.productdetail',$v->slug)];
        } 
        if(null !== $this->profile){
            $medias = $this->profile->getMedia();  
            foreach($medias as $val){   
                if($this->profile->avatar == $val->id){
                    $avatar=Storage::disk('dospace')->url($val->id.'/'.$val->file_name);  
                }
            } 
        }
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'location'=>isset($this->profile->location) && !empty($this->profile->location)?$this->profile->location:'',
            'randommediaproduct'=> $media,
            'online' => false,
            'profile'=>$avatar,
            'store'=>route('shop.mystore',$this->id),
            'session' => $this->session_details($this->id)
        ];
    }

    private function session_details($id)
    {
        $session = Session::whereIn('user1_id', [auth()->id(), $id])->whereIn('user2_id', [auth()->id(), $id])->first();
        return new SessionResource($session);
    }
}

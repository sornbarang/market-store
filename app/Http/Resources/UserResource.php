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
        $products= ProductsAds::where('user_id',$this->id)->latest()->limit(5)->inRandomOrder()->get();
        $media=[];
        foreach($products as $v){
            $media[]=['media'=>Storage::url($v->getFirstMedia()->id.'/'.$v->getFirstMedia()->file_name),'link'=>route('market.productdetail',$v->slug)];
        }   
        //     foreach ($media as $key => $v) {
        //         $media[$key]['media']==Storage::url($media[$key]['media']['id'].'/'.$media[$key]['media']['file_name']); 
            
        // }
        // $this->productads->each(function ($item, $key) {
        //     return $item->getMedia();
        // });
        // if(is_numeric($this->session_details($this->id)) && $this->session_details($this->id)==$this->id){
        //     return [];
        // }
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'randommediaproduct'=> $media,
            'online' => false,
            'session' => $this->session_details($this->id)
        ]; 
    }
    // $id is get all user id but not current user login
    private function session_details($id)
    {
        $session = Session::whereIn('user1_id', [auth()->id(), $id])->whereIn('user2_id', [auth()->id(), $id])->first();
        // if($session){
        //     return new SessionResource($session);
        // }
        // return $id;
        return new SessionResource($session);

    }
}

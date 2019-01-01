<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Resources\ChatResource;
use App\Events\PrivateChatEvent;
use Carbon\Carbon;
use App\Events\MsgReadEvent;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;
use Illuminate\Support\Facades\Storage;
class ChatController extends Controller
{
    public function send(Session $session, Request $request)
    {
        $message = $session->messages()->create(['content' => $request->content]);
        $chat = $message->createForSend($session->id);
        $message->createForReceive($session->id, $request->to_user);
        // save to updated_at make it order in conversation
        $session->updated_at=Carbon::now();
        $session->save();
        // if deleted exist update to null cos some user deleted this conversation need to update to null to comunication again
        $session = Session::where('id',$session->id)->where('deleted_by','like','%'.$request->to_user.'%')->first();
        if($session){  
            $session->deleted_by ='';
            $session->save();
        }
        broadcast(new PrivateChatEvent($message->content, $chat,$request->to_user));
        return response($chat->id, 200);
    }
    public function mediaconvert($media){
        $getThub = $media->getPath('thumb');  
        $file_name = $media->file_name; 
        // $name = $media->name; 
        $id = $media->id; 
        // get crop image
        $cropPath = storage_path('app/public/'.$id.'/chats/'.$file_name);
        $cropPathFit = storage_path('app/public/'.$id.'/chats/crop.png');
        Image::load($getThub)->crop(Manipulations::CROP_TOP, 361, 230)->save($cropPath);
        Image::load($getThub)
            ->crop(Manipulations::CROP_TOP, 750, 430)
            ->format(Manipulations::FORMAT_PNG)
            ->background('ffffff')->save($cropPathFit);
    }
    public function upload(Session $session, Request $request){ 
        $message = $session->messages()->create(['content' => 'file']);
        $chat = $message->createForSend($session->id); 
        $message->createForReceive($session->id, $request->to_user);
        $images=[];
        if($request->hasFile('files')){
            $allowedfileExtension=['jpg','jpeg','png','zip'];
            $files = $request->file('files');  
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension(); 
                $check=in_array($extension,$allowedfileExtension);
                if($check){ 
                    $media = $message
                    ->addMedia($file)
                    ->sanitizingFileName(function($filename) {
                        return strtolower(str_replace(['#', '/', '\\', ' '], '-', $filename));
                    })
                    ->toMediaCollection(); 
                    // $this->mediaconvert($media);
                    $images[]=asset(Storage::url($media->id.'/'.$media->file_name)); 
                }
            }  
        }
        broadcast(new PrivateChatEvent('file', $chat,$request->to_user,$images));

        // return response($chat->id, 200);
        return $images;
    }
    public function chats(Session $session,Request $request)
    {
        if(isset($request->date) && $request->date !=''){
            $preD1 = Carbon::createFromFormat('Y-m-d H:i:s.u', $request->date)->subDays(1);
            $preD1 = $preD1->format('Y-m-d');
            $preD2 = Carbon::createFromFormat('Y-m-d H:i:s.u', $request->date)->subDays(2);
            $preD2 = $preD2->format('Y-m-d');
            // dd($preD2,$preD1,\Carbon\Carbon::today());
            return ChatResource::collection($session->chats()->where('user_id', auth()->id())->whereDate('chats.created_at',$preD2)->orWhereDate('chats.created_at',$preD1)->orderBy('chats.created_at','desc')->get());

        }
        return ChatResource::collection($session->chats()->where('user_id', auth()->id())->whereDate('chats.created_at',\Carbon\Carbon::today())->orWhereDate('chats.created_at',\Carbon\Carbon::yesterday())->get());
        // return ChatResource::collection($session->chats->where('user_id', auth()->id()));
    }

    public function read(Session $session)
    {
        $chats = $session->chats->where('read_at', null)->where('type', 0)->where('user_id', '!=', auth()->id());

        foreach ($chats as $chat) {
            $chat->update(['read_at' => Carbon::now()]);
            broadcast(new MsgReadEvent(new ChatResource($chat), $chat->session_id));
        }
    }

    public function clear(Session $session)
    {
        $session->deleteChats();
        $session->chats->count() == 0 ? $session->deleteMessages() : '';
        return response('cleared', 200);
    }
}

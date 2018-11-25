<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Session;
use App\Http\Resources\SessionResource;
use App\Events\SessionEvent;

class SessionController extends Controller
{
    public function create(Request $request)
    { 
        $session = Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);
        $session = Session::findOrFail($session->id); 
        if($session)
            $modifiedSession = new SessionResource($session);
            broadcast(new SessionEvent($modifiedSession, auth()->id(),$request->friend_id));
            return $modifiedSession;
    }
    public function removeSession($id){
        $session = Session::findOrFail($id); 
        if($session){
            $deletedBy = $session->deleted_by;
            if(!empty($deletedBy)){
                $expDeletedBy=explode(',',$deletedBy);
                if(is_array($expDeletedBy) && count($expDeletedBy) > 0){
                    array_push($expDeletedBy,auth()->id()); 
                    $pushDeletedBy = array_unique($expDeletedBy);
                    $pushDeletedBy = implode(',',$pushDeletedBy);
                }
            }else{
                $pushDeletedBy = auth()->id();
            }
            $session->deleted_by =$pushDeletedBy;
            $session->save();
            return response()->json($session);
        }
        return response()->json([]);
    }
}

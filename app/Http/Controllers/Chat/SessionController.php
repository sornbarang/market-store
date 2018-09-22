<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Http\Resources\SessionResource;
use App\Events\SessionEvent;

class SessionController extends Controller
{
    public function create(Request $request)
    {
        // must be check exist session record 
        // $chkSession = Session::where('user1_id',auth()->id())->where('user2_id',$request->friend_id)->first();
        // if($chkSession){
        //     $session =$chkSession;
        // }else{
        //     $session = Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);
        // }
        $session = Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);

        $modifiedSession = new SessionResource($session);
        broadcast(new SessionEvent($modifiedSession, auth()->id()));
        return $modifiedSession;
    }
}

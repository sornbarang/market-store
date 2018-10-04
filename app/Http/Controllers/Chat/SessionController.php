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
        // $session = new Session;
        // $session->user1_id =auth()->id();
        // $session->user2_id =$request->friend_id;
        // $session->save();
        // $session = Session::find($user->id)
        $session = Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);
        $session = Session::find($session->id); 
        if($session)
            $modifiedSession = new SessionResource($session);
            broadcast(new SessionEvent($modifiedSession, auth()->id()));
            return $modifiedSession;
    }
}

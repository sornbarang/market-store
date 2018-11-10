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
}

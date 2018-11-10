<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\Session;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return UserResource::collection(User::all());
        return view('chat');
    }
    public function createSession(Request $request)
    { 
        $session = Session::where('user1_id' ,auth()->id())->where('user2_id',$request->friend_id)->first();
        if(!$session){
            $session = Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);
            $session = Session::findOrFail($session->id);  
            return $session;
        }else{ 
            return $session;
        }
    }
    public function getFriends()
    { 
        $session = Session::select('user1_id','user2_id')->where('user1_id',auth()->id())->orWhere('user2_id',auth()->id())->get();
        $friends = [];
        if($session->count() > 0){
            foreach ($session as $key => $value) {
                $friends[] = $value->user1_id;
                $friends[] = $value->user2_id;
            } 
            $friends = array_unique($friends);
        } 
        return UserResource::collection(User::where('id', '!=', auth()->id())->whereIn('id',$friends)->get());
    }
} 
<?php

namespace App\Http\Controllers\Chat;

use App\Http\Resources\UserResource;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Session;
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
        return view('chat');
    }
    public function createSession(Request $request){ 
        // must be check exist session record 
        // $chkSession = Session::where('user1_id',auth()->id())->where('user2_id',$request->friend_id)->first();
        // if(!$chkSession){
        //     Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);
        // }
            Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);

        // get active user mean select user to comunicate
        $checkSessionUsrs = UserResource::collection(User::where('id', '!=', auth()->id())->where('id',$request->friend_id)->get());
        return $checkSessionUsrs;
    }
    public function getFriends()
    {
        $checkSessionUsrs = UserResource::collection(User::where('id', '!=', auth()->id())->get());
        // dd($checkSessionUsrs);
        return $checkSessionUsrs;
    }
}

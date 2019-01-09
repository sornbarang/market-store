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
        // $session = Session::where('user1_id' ,auth()->id())->where('user2_id',$request->friend_id)->first();
        $session = Session::whereIn('user1_id', [auth()->id(), $request->friend_id])->whereIn('user2_id', [auth()->id(), $request->friend_id])->first();
        if(!$session){
            $session = Session::create(['user1_id' => auth()->id(), 'user2_id' => $request->friend_id]);
            $session = Session::findOrFail($session->id);   
        }else{
            if(!empty($session->deleted_by)){
                $expArr= explode(',',$session->deleted_by);
                if(is_array($expArr) && count($expArr) > 0){
                    $filtered = array_where($expArr, function ($value, $key) {
                        return $value != auth()->id();
                    }); 
                    // dd($filtered);
                    if($filtered){
                        $session->deleted_by=is_array($filtered)?implode(',',$filtered):'';
                        $session->save();
                    }else{
                        $session->deleted_by='';
                        $session->save();
                    }
                }
            }
        }
        return $session;
    }
    public function getFriends()
    { 
        $session = Session::select('user1_id','user2_id','deleted_by')->where('user1_id',auth()->id())->orWhere('user2_id',auth()->id())->orderBy('updated_at','desc')->get();
        // dd($session);
        $friends = [];   
        $multiplied = $session->map(function ($item, $key) { 
            if(!empty($item->deleted_by)){
                $expArr= explode(',',$item->deleted_by);
                if(is_array($expArr) && count($expArr) > 0){
                    // check deleted_by if exist dont get it
                    $filtered = array_where($expArr, function ($value, $key) {
                        return $value == auth()->id();
                    });
                    if(count($filtered) > 0){
                        return [];
                    }
                }
            }
            return [$item->user1_id, $item->user2_id];
        });
        // biding multi array to one array Using collapse and unique
        $friends = $multiplied->collapse()->unique();
        $query = User::where('id', '!=', auth()->id())->whereIn('id',$friends);
        $implodeF = $multiplied->collapse()->unique()->implode(','); 
        if($implodeF!=''){
            $query->orderByRaw('FIELD(id,'.$implodeF.')');
        }
        return UserResource::collection( $query->simplePaginate(10));
    }
} 
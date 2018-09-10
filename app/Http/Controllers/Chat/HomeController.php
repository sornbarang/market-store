<?php

namespace App\Http\Controllers\Chat;

use App\Http\Resources\UserResource;
use App\Models\User;

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

    public function getFriends()
    {
        return UserResource::collection(User::where('id', '!=', auth()->id())->get());
    }
}

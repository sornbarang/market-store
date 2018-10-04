<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
class SearchController extends Controller
{
    public function index(Request $request){
        return UserResource::collection(User::where('id', '!=', auth()->id())->where('name','like','%'.$request->keyword.'%')->get());
    }
}

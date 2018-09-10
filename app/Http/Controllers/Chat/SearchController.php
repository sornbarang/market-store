<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\User;
class SearchController extends Controller
{
    public function index(){
        $user=User::all();
        return response($user, 200);
    }
}

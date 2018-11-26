<?php

namespace App\Http\Controllers\Shop;

use App\models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function followUser($profileId)
    {
        $user = User::find($profileId);
        if(! $user) {

            return redirect()->back()->with('error', 'User does not exist.');
        }

        $user->followers()->attach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully followed the user.');
    }

    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function unFollowUser($profileId)
    {
        $user = User::find($profileId);
        if(! $user) {

            return redirect()->back()->with('error', 'User does not exist.');
        }
        $user->followers()->detach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully unfollowed the user.');
    }
}

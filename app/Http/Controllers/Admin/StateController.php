<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Country;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();
        return view('admin.state.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.state.add', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addState = new State();
        $addState->name = $request->name;
        $addState->country_id = $request->country_id;
        $addState->save();

        foreach (['en', 'km'] as $locale) {
            $addState->translateOrNew($locale)->name = $request->name;
        }
        $addState->save();

        $request->session()->flash('success', 'State successfully saved.');
        return redirect()->route('admin.state.index');
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
        $countries = Country::all();
        $state = State::findOrFail($id);
        return view('admin.state.edit', compact(['state', 'countries']));
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
        $updateState = State::findOrFail($id);
        $updateState->translate()->name = $request->name;
        $updateState->country_id = $request->country_id;
        $updateState->save();
        $request->session()->flash('success', 'State successfully updated.');
        return redirect()->route('admin.state.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ids = explode(',',$id);
        State::whereIn('id', $ids)->delete();
        return response()->json(['status'=>true]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        return view('admin.city.add', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addCity = new City();
        $addCity->name = $request->name;
        $addCity->state_id = $request->state_id;
        $addCity->save();

        foreach (['en', 'km'] as $locale) {
            $addCity->translateOrNew($locale)->name = $request->name;
        }
        $addCity->save();

        $request->session()->flash('success', 'City successfully saved.');
        return redirect()->route('admin.city.index');
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
        $states = State::all();
        $city = City::findOrFail($id);
        return view('admin.city.edit', compact(['city', 'states']));
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
        $updateCity = City::findOrFail($id);
        $updateCity->translate()->name = $request->name;
        $updateCity->state_id = $request->state_id;
        $updateCity->save();

        $request->session()->flash('success', 'City successfully updated.');
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
        City::whereIn('id', $ids)->delete();
        return response()->json(['status'=>true]);
    }
}

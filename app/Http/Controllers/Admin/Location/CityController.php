<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.location.cities.index', [
            'cities' => City::query()->latest()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.location.cities.create', [
            'countries' => Country::all(),
            'states' => State::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'country_id' => 'required|integer',
            'state_id' => 'required|integer'
        ]);

        City::create($request->only('name', 'country_id', 'state_id'));
        return to_route('cities.index')->with('successful', '');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('admin.location.cities.update', [
            'city' => $city,
            'countries' => Country::all(),
            'states' => State::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|max:255',
            'country_id' => 'required|integer',
            'state_id' => 'required|integer'
        ]);

        $city->update($request->only('name', 'country_id', 'state_id'));
        return to_route('cities.index')->with('successful', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return back()->with('successful', '');
    }
}

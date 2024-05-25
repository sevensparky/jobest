<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.location.states.index', [
            'states' => State::query()->latest()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.location.states.create', [
            'countries' => Country::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'country_id' => 'required|integer'
        ]);

        State::create($request->only('name', 'country_id'));
        return to_route('states.index')->with('successful', '');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        return view('admin.location.states.update', [
            'state' => $state,
            'countries' => Country::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        $request->validate([
            'name' => 'required|max:255',
            'country_id' => 'required|integer'
        ]);

        $state->update($request->only('name', 'country_id'));
        return to_route('states.index')->with('successful', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();
        return back()->with('successful', '');
    }
}

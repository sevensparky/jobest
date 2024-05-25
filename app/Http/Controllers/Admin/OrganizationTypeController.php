<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationType;
use Illuminate\Http\Request;

class OrganizationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.organization-type.index', [
            'items' => OrganizationType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.organization-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        OrganizationType::create($request->only('name'));
        return to_route('organization-type.index')->with('successful', '');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = OrganizationType::query()->findOrFail($id);

        return view('admin.organization-type.update', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $item = OrganizationType::query()->findOrFail($id);

        $item->update(array_merge($request->only('name'), [
            'slug' => $item->name
        ]));

        return to_route('organization-type.index')->with('successful', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        OrganizationType::query()->findOrFail($id)->delete();

        return back()->with('successful', '');
    }
}

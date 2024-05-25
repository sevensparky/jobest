<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IndustryType;
use Illuminate\Http\Request;

class IndustryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.industry-type.index', [
            'items' => IndustryType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.industry-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        IndustryType::create($request->only('name'));
        return to_route('industry-type.index')->with('successful', '');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = IndustryType::query()->findOrFail($id);

        return view('admin.industry-type.update', [
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

        $item = IndustryType::query()->findOrFail($id);

        $item->update($request->only('name'));

        return to_route('industry-type.index')->with('successful', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        IndustryType::query()->findOrFail($id)->delete();

        return back()->with('successful', '');
    }
}

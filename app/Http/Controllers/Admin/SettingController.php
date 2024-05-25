<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Setting::query()->first();
        $itemQuery = Setting::all();
        return view('admin.setting.index', compact('item', 'itemQuery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingRequest $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdims'). '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/'), $fileName);
            Setting::create(array_merge($request->validated(), [
                'image' => $fileName
            ]));
        }else{
            Setting::create($request->validated());
        }

        return to_route('settings.index')->with('success', '');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $item)
    {
        $item = Setting::query()->first();
        return view('admin.setting.update', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingRequest $request, Setting $item)
    {
        $item = Setting::query()->first();

        if ($request->hasFile('image')) {
            $itemImage = storage_path('app/public/'. $item->image);
            if (File::exists($itemImage)) {
                File::delete($itemImage);
            }

            $file = $request->file('image');
            $fileName = date('Ymdims'). '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/'), $fileName);
            $item->update(array_merge($request->validated(), [
                'image' => $fileName
            ]));
        }else {
            $item->update($request->validated());
        }

        return to_route('settings.index')->with('success', '');
    }

}

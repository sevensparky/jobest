<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Acl\Models\Permission;
use Yajra\Acl\Models\Role;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('hasPermission')->only('create', 'update');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.roles.index', ['roles' => Role::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create', ['permissions' => Permission::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:150',
            'permission_id' => 'required',
            'description' => 'nullable|max:255'
        ]);

        $role = Role::create(array_merge($request->only('name', 'description'),[
            'slug' => $request->name
        ]));
        $role->permissions()->sync($request->input('permission_id'));
        return to_route('roles.index')->with('success', '');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('admin.roles.update', ['role' => $role, 'permissions' => Permission::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|max:150',
            'permission_id' => 'required',
            'description' => 'nullable|max:255'
        ]);


        $role->update(array_merge($request->only('name', 'permission', 'description'),[
            'slug' => $request->name
        ]));
        $role->permissions()->sync($request->input('permission_id'));
        return to_route('roles.index')->with('success', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('successful' ,'');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Role::with(['rolesPeople.movies', 'rolesPeople.people'])->get();
    }

  
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role = new Role();

        if($request->name != "") $role->name = $request->name;
        $role->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return Role::with(['rolesPeople.movies', 'rolesPeople.people'])->where('id', '=', $role->id)->first();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        if($request->name != "") $role->name = $request->name;
        $role->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return true;
    }
}

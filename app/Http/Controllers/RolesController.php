<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
   
    function __construct()
    {

    }
   
    public function index(Request $request)
    {   
        $roles = Role::orderBy('id','DESC')->paginate(5);
        $roles = Role::all();

        return view('roles.index') ->with('roles', $roles);           
    }

    public function create()
    {
        $permissions = Permission::get();
       
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            
        ]);

        $name = $request['name'];
        $role = new Role();
        $role->name = $name;

        $permissions = $request['permissions'];
        
        $role->save();
        //Looping thru selected permissions
        foreach ($permissions as $permission) {
            $p = Permission::where('id', '=', $permission)->firstOrFail(); 
         //Fetch the newly created role and assign permission
            $role = Role::where('name', '=', $name)->first(); 
            $role->givePermissionTo($p);
        }        

        return redirect()->route('roles.index')
                        ->with('success','Role created successfully');
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        $rolePermissions = Permission::findOrFail($id);   
        
        return view('roles.show', compact('role', 'rolePermissions'));
    }
   
    public function edit(Role $role)
    {
        
        $rolePermissions = $role->permissions->pluck('name')->toArray();
        $permissions = Permission::get();
        $roles = $role;

        return view('roles.edit', compact('role', 'rolePermissions', 'permissions'));
    }

    public function update(Role $role, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role->update($request->only('name'));

        $role->syncPermissions($request->get('permission'));

        return redirect()->route('roles.index')
                        ->with('success','Role updated successfully');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')
                        ->with('success','Role deleted successfully');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{    
    public function index() 
    {   
        $roles = Role::all();
        $users = User::all();
        return view('users.index', compact('users','roles'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('users.create', ['roles'=>$roles]);
    }

    public function store(User $user, StoreUserRequest $request) 
    {        
        $user->create(array_merge($request->validated(), [
            'password' => 'test' 
        ]));
        return redirect()->route('user.index')
            ->withSuccess(__('User created successfully.'));
    }
  
    public function show($id) 
    {
        $roles = Role::findOrFail($id);
        $user = User::findOrFail($id);        
        return view('users.show', compact('user','roles'));
    }
    
    public function edit($id) 
    {   
        $roles = Role::findOrFail($id);
        $user = User::findOrFail($id);   
        return view('users.edit', compact('user','roles'));
    }

    public function update(User $user, UpdateUserRequest $request) 
    {
        $user->update($request->validated());

        $user->syncRoles($request->get('role'));

        return redirect()->route('user.index')
        ->with('flash_message',
        'User successfully update.');
    }

    public function destroy(User $user) 
    {
        $user->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }
}
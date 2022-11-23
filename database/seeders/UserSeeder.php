<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
          $user = User::create([
            'name' => 'rian', 
            'email' => 'riskirianputra@gmail.com',                   
            'password' => bcrypt('jambu123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // $role = Role::create(['name' => 'FO']);
        // Permission::create(['name' => 'Administer roles & permissions']);
        // $permissions = Permission::pluck('id','id')->all();
        // $role->givePermissionTo('Administer roles & permissions');
        // $role->syncPermissions($permissions);

        // $user->assignRole([$role->id]);
    }
}

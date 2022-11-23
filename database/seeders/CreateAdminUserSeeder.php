<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use HasFactory;


class CreateAdminUserSeeder extends Seeder
{
    
    public function run()
    {
        $user = User::create([
            'name' => 'Adminbesar', 
            'email' => 'admin1@gmail.com',                   
            'password' => bcrypt('admin123')
        ]);

        $role = Role::create(['name' => 'adminn']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}

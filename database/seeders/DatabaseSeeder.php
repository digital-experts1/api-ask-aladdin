<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


    // Create roles
    $roleAdmin = Role::create(['name' => 'admin']);
    $roleUser = Role::create(['name' => 'user']);

    // Create permissions
    $permissionEdit = Permission::create(['name' => 'edit articles']);
    $permissionView = Permission::create(['name' => 'view articles']);

    // Assign permission to role
    $roleAdmin->givePermissionTo($permissionEdit);
    $roleUser->givePermissionTo($permissionView);

    }
}

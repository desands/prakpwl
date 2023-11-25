<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create([
            'name' => 'admin'
        ]);

        $role_mahasiswa = Role::create([
            'name' => 'mahasiswa'
        ]);

        $permission = Permission::create([
            'name' => 'create'
        ]);
        $permission = Permission::create([
            'name' => 'update'
        ]);
        $permission = Permission::create([
            'name' => 'read'
        ]);
        $permission = Permission::create([
            'name' => 'delete'
        ]);

        $mahasiswa = User::create([
            'name' => 'Mahasiswa 1',
            'email' => 'mahasiswa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $mahasiswa->assignRole('mahasiswa');


        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $admin->assignRole('admin');

        $role_admin->givePermissionTo('read');
        $role_admin->givePermissionTo('update');
        $role_admin->givePermissionTo('delete');
        $role_admin->givePermissionTo('create');
        $role_mahasiswa->givePermissionTo('read');
    }
}

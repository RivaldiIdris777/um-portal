<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
        try {
            $admin = User::create(array_merge([
                'email' => 'mjumain11@gmail.com',
                'name' =>  'mjumain'
            ], $default_user_value));

            $admin = User::create(array_merge([
                'email' => 'iksan21@gmail.com',
                'name' =>  'iksan'
            ], $default_user_value));

            $admin = User::create(array_merge([
                'email' => 'accessrate23@gmail.com',
                'name' =>  'aldi'
            ], $default_user_value));

            $user = User::create(array_merge([
                'email' => 'useraccess10@gmail.com',
                'name' =>  'user_access'
            ], $default_user_value));

            $role_admin = Role::create(['name' => 'admin']);
            $role_user  = Role::create(['name' => 'user']);

            $permission = Permission::create([ 'name' => 'read role']);
            $permission = Permission::create([ 'name' => 'create role']);
            $permission = Permission::create([ 'name' => 'update role']);
            $permission = Permission::create([ 'name' => 'delete role']);

            $admin->assignRole('admin');
            $user->assignRole('user');

            DB::beginTransaction();
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
        }
    }
}

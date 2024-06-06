<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat Permissions
        $permissions = [
            'view products',
            'create products',
            'edit products',
            'delete products',
            'view orders',
            'create orders',
            'edit orders',
            'delete orders',
            'view users',
            'create users',
            'edit users',
            'delete users',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Buat Role Admin dan sinkronisasi semua permissions
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $adminRole->syncPermissions(Permission::all());

        // Buat Role User dan sinkronisasi permissions dasar
        $userRole = Role::firstOrCreate(['name' => 'User']);
        $userRole->syncPermissions(['view products', 'view orders']);

        // Buat Admin User
        $admin = User::firstOrCreate([
            'name' => 'Kevin Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'), // Ganti dengan password yang aman
        ]);
        $admin->assignRole($adminRole);

        // Buat General User
        $user = User::firstOrCreate([
            'name' => 'Kevin User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456'), // Ganti dengan password yang aman
        ]);
        $user->assignRole($userRole);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manage_users = [
            'user.create',
            'user.edit',
            'user.index',
            'user.show',
            'user.delete',
        ];
        foreach ($manage_users as $user_perm) {
            Permission::create(['name' => $user_perm]);
        }

        $manage_groups = [
            'group.create',
            'group.edit',
            'group.index',
            'group.show',
            'group.delete',
        ];
        foreach ($manage_groups as $group_perm) {
            Permission::create(['name' => $group_perm]);
        }

        $manage_events = [
            'event.create',
            'event.edit',
            'event.index',
            'event.show',
            'event.delete',
        ];

        foreach ($manage_events as $event_perm) {
            Permission::create(['name' => $event_perm]);
        }

        $manage_guests = [
            'guest.create',
            'guest.edit',
            'guest.index',
            'guest.show',
            'guest.delete',
        ];
        foreach ($manage_guests as $guest_perm) {
            Permission::create(['name' => $guest_perm]);
        }

        $role_admin = Role::create(['name' => 'admin']);
        $role_admin->givePermissionTo($manage_users);
        $role_admin->givePermissionTo($manage_events);
        $role_admin->givePermissionTo($manage_guests);
        $role_admin->givePermissionTo($manage_groups);

        $role_user = Role::create(['name' => 'user']);
        $role_user->givePermissionTo($manage_guests);

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole($role_admin);
    }
}

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
            'user.read',
            'user.delete',
        ];
        foreach ($manage_users as $user_perm) {
            Permission::create(['name' => $user_perm]);
        }

        $manage_events = [
            'event.create',
            'event.edit',
            'event.read',
            'event.delete',
        ];

        foreach ($manage_events as $event_perm) {
            Permission::create(['name' => $event_perm]);
        }

        $manage_guests = [
            "guest.create",
            "guest.edit",
            "guest.read",
            "guest.delete"
        ];
        foreach($manage_guests as $guest_perm) {
            Permission::create(["name" => $guest_perm]);
        }

        $role_admin = Role::create(['name' => 'admin']);
        $role_admin->givePermissionTo($manage_users);
        $role_admin->givePermissionTo($manage_events);
        $role_admin->givePermissionTo($manage_guests);

        $role_user = Role::create(["name" => "user"]);
        $role_user->givePermissionTo($manage_guests);

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole($role_admin);
    }
}

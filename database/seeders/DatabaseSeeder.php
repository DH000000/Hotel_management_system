<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->command->info('===========================================');
        $this->command->info('Starting Database Seeding...');
        $this->command->info('===========================================');

        // ==================== CREATE ROLES ====================
        $this->command->info('Creating roles...');

        $roles = [
            ['name' => 'Super Admin', 'slug' => 'super_admin', 'is_default' => false],
            ['name' => 'Admin', 'slug' => 'admin', 'is_default' => false],
            ['name' => 'Hotel Owner', 'slug' => 'hotel_owner', 'is_default' => true],
            ['name' => 'Staff', 'slug' => 'staff', 'is_default' => false],
            ['name' => 'Guest', 'slug' => 'guest', 'is_default' => false],
        ];

        foreach ($roles as $roleData) {
            Role::updateOrCreate(
                ['slug' => $roleData['slug']],
                $roleData
            );
            $this->command->info("  ✓ Role '{$roleData['name']}' created");
        }

        // ==================== CREATE PERMISSIONS ====================
        $this->command->info('Creating permissions...');

        $permissions = [
            ['name' => 'View Hotels', 'slug' => 'view_hotels', 'module' => 'hotels'],
            ['name' => 'Create Hotel', 'slug' => 'create_hotel', 'module' => 'hotels'],
            ['name' => 'Edit Hotel', 'slug' => 'edit_hotel', 'module' => 'hotels'],
            ['name' => 'Delete Hotel', 'slug' => 'delete_hotel', 'module' => 'hotels'],
            ['name' => 'Approve Hotel', 'slug' => 'approve_hotel', 'module' => 'hotels'],
            ['name' => 'View Rooms', 'slug' => 'view_rooms', 'module' => 'rooms'],
            ['name' => 'Create Room', 'slug' => 'create_room', 'module' => 'rooms'],
            ['name' => 'Edit Room', 'slug' => 'edit_room', 'module' => 'rooms'],
            ['name' => 'Delete Room', 'slug' => 'delete_room', 'module' => 'rooms'],
            ['name' => 'View Bookings', 'slug' => 'view_bookings', 'module' => 'bookings'],
            ['name' => 'Create Booking', 'slug' => 'create_booking', 'module' => 'bookings'],
            ['name' => 'Edit Booking', 'slug' => 'edit_booking', 'module' => 'bookings'],
            ['name' => 'Cancel Booking', 'slug' => 'cancel_booking', 'module' => 'bookings'],
            ['name' => 'View Users', 'slug' => 'view_users', 'module' => 'users'],
            ['name' => 'Create User', 'slug' => 'create_user', 'module' => 'users'],
            ['name' => 'Edit User', 'slug' => 'edit_user', 'module' => 'users'],
            ['name' => 'Delete User', 'slug' => 'delete_user', 'module' => 'users'],
            ['name' => 'Manage OTA', 'slug' => 'manage_ota', 'module' => 'ota'],
            ['name' => 'Sync OTA', 'slug' => 'sync_ota', 'module' => 'ota'],
            ['name' => 'View Reports', 'slug' => 'view_reports', 'module' => 'reports'],
            ['name' => 'Export Reports', 'slug' => 'export_reports', 'module' => 'reports'],
            ['name' => 'Manage Settings', 'slug' => 'manage_settings', 'module' => 'settings'],
        ];

        foreach ($permissions as $permData) {
            Permission::updateOrCreate(
                ['slug' => $permData['slug']],
                $permData
            );
        }
        $this->command->info('  ✓ ' . count($permissions) . ' permissions created');

        // ==================== CREATE USERS ====================
        $this->command->info('Creating users...');

        $users = [
            [
                'email' => 'superadmin@triplodge.com',
                'name' => 'Super Admin',
                'phone' => '9999999999',
                'role' => 'super_admin',
            ],
            [
                'email' => 'admin@triplodge.com',
                'name' => 'Admin User',
                'phone' => '8888888888',
                'role' => 'admin',
            ],
            [
                'email' => 'hotel@triplodge.com',
                'name' => 'Hotel Owner',
                'phone' => '7777777777',
                'role' => 'hotel_owner',
            ],
            [
                'email' => 'staff@triplodge.com',
                'name' => 'Staff User',
                'phone' => '5555555555',
                'role' => 'staff',
            ],
            [
                'email' => 'guest@triplodge.com',
                'name' => 'Guest User',
                'phone' => '6666666666',
                'role' => 'guest',
            ],
        ];

        foreach ($users as $userData) {
            User::updateOrCreate(
                ['email' => $userData['email']],
                [
                    'unique_id' => 'USR' . strtoupper(Str::random(8)),
                    'name' => $userData['name'],
                    'password' => Hash::make('password'),
                    'phone' => $userData['phone'],
                    'role' => $userData['role'],
                    'status' => 'active',
                    'email_verified_at' => now(),
                ]
            );
            $this->command->info("  ✓ User '{$userData['name']}' created");
        }

        $this->command->info('===========================================');
        $this->command->info('✅ DATABASE SEEDING COMPLETED!');
        $this->command->info('===========================================');
        $this->command->info('');
        $this->command->info('📋 LOGIN CREDENTIALS:');
        $this->command->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
        $this->command->info('👑 Super Admin : superadmin@triplodge.com / password');
        $this->command->info('👨‍💼 Admin       : admin@triplodge.com / password');
        $this->command->info('🏨 Hotel Owner : hotel@triplodge.com / password');
        $this->command->info('👥 Staff       : staff@triplodge.com / password');
        $this->command->info('👤 Guest       : guest@triplodge.com / password');
        $this->command->info('━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━');
    }
}

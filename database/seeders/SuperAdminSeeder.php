<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => env('SUPER_ADMIN_EMAIL', 'admin@example.com')],
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'phone' => null,
                'email' => env('SUPER_ADMIN_EMAIL', 'admin@example.com'),
                'password' => Hash::make(env('SUPER_ADMIN_PASSWORD', 'changeme')),
                'is_admin' => true,
            ]
        );
    }
}

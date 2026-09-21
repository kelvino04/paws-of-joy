<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'panda2a@hotmail.com',
            ],
            [
                'name' => 'Miriam sophie',
                'password' => Hash::make(env('ADMIN_PASSWORD')),
                'is_admin' => true,
            ]
        );
    }
}

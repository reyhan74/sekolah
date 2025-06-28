<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'guru1',
            'password' => Hash::make('password123'),
            'level' => 'guru',
        ]);

        User::create([
            'username' => 'murid1',
            'password' => Hash::make('password123'),
            'level' => 'murid',
        ]);
    }
}

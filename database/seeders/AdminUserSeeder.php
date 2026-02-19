<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'lbis',
            'email' => 'lukasz.bis22@gmail.com',
            'password' => Hash::make('dotcom123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'dkostek',
            'email' => 'damian.kostek1@wp.pl',
            'password' => Hash::make('dotcom123'),
            'role' => 'admin',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Tworzy konto administratora (dostęp do /panel i dodawania wpisów na blogu),
     * jeśli jeszcze nie istnieje. Hasło zmień po pierwszym logowaniu.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'lukasz.bis22@gmail.com'],
            [
                'name'     => 'lbis',
                'password' => Hash::make('DotCom2026!'),
                'role'     => 'admin',
            ]
        );
    }
}

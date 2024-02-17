<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->create([
                'name' => 'Ahmad Mazlan',
                'email' => 'test@test.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('terserah'),
            ]);

        User::factory()
            ->count(5)
            ->create();
    }
}

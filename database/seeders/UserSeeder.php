<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Akhmad Safii',
                'email' => 'akhmadsafii96@gmail.com',
                'username' => 'akhmadsafii96',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Siti Rohmah',
                'email' => 'siti.rohmah@mail.com',
                'username' => 'siti.rohmah',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@mail.com',
                'username' => 'budi.santoso',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'),
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

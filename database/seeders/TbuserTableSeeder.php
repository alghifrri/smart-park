<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TbuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbuser')->insert([
            [
                'name' => 'ardi',
                'email' => 'ardipamungkas@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('ardi123'), // Menggunakan bcrypt untuk mengenkripsi password
                'role' => 'Admin',
                'Status' => 'Member',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Indah Permatasari',
                'email' => 'indah@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('indah123'),
                'role' => 'Kasir',
                'Status' => 'Nonmember',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rahel',
                'email' => 'rahel@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('rahel123'),
                'role' => 'Pengguna',
                'Status' => 'Member',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

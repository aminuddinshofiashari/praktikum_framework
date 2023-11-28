<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yanto Mulyanto',
            'email' => 'yanto@tomo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'CAMABA',
            ]);
            DB::table('users')->insert([
            'name' => 'Xinta Kuxinta',
            'email' => 'xinta@tomo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'CAMABA',
            ]);
            DB::table('users')->insert([
            'name' => 'administrator',
            'email' => 'administrator@tomo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'role' => 'UNIVERSITAS',
            ]);
    }
}

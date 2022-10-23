<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Dokter;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $admin = User::create([
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);
        Admin::create([
            'user_id' =>  $admin->id,
            'name' => 'admin account'
        ]);
        $dokter = User::create([
            'username' => 'dokter',
            'role' => 'dokter',
            'password' => Hash::make('dokter')
        ]);
        Dokter::create([
            'user_id' => $dokter->id,
            'nip' => 939993828288245467,
            'name' => 'Dokter akun',
            'alamat' => 'alamat si dokter',
            'bidang' => 'bidang si dokter'
        ]);
    }
}

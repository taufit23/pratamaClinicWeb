<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Dokter;
use App\Models\Layanan;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Pembayaran;
use App\Models\RekamMedis;
use App\Models\User;
use Carbon\Carbon;
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
        $pasien = User::create([
            'username' => 'pasien',
            'role' => 'pasien',
            'password' => Hash::make('pasien')
        ]);
        Pasien::create([
            'user_id' => $pasien->id,
            'name' => 'pasien akun',
            'ktp' => 1383772766171234,
            'no_hp' => 6282288191981,
            'jenis_kelamin' => 'laki - laki',
            'tanggal_lahir' => Carbon::parse('1992-02-11'),
            'alamat' => 'alamat si pasien',
        ]);

        Obat::create([
            'nama_obat' => 'Paracetamol',
            'stok_obat' => 200000,
            'harga_obat' => 800
        ]);
        Obat::create([
            'nama_obat' => 'Amoxilin',
            'stok_obat' => 100000,
            'harga_obat' => 900
        ]);
        Obat::create([
            'nama_obat' => 'Bodrex migra',
            'stok_obat' => 900000,
            'harga_obat' => 800
        ]);
        Obat::create([
            'nama_obat' => 'Bodrex',
            'stok_obat' => 1100000,
            'harga_obat' => 800
        ]);

        Layanan::create([
            'nama_layanan' => 'Pasang infus dewasa',
            'harga_layanan' => 25000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'Pasang infus balita',
            'harga_layanan' => 80000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'Pasang infus anak usia dini',
            'harga_layanan' => 50000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'Periksa kandungan',
            'harga_layanan' => 250000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'USG Kandungan',
            'harga_layanan' => 50000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'Melahirkan',
            'harga_layanan' => 3500000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'Periksa gigi',
            'harga_layanan' => 10000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'Pasang gigi palsu',
            'harga_layanan' => 150000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'Tambal gigi',
            'harga_layanan' => 50000,
            'created_at' => now()
        ]);
        Layanan::create([
            'nama_layanan' => 'cabut gigi',
            'harga_layanan' => 49000,
            'created_at' => now()
        ]);
    }
}

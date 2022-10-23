<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Layanan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('layanans')->insert([
            'nama_layanan' => 'Surat Keterangan Sehat (KIR)',
            'harga_layanan' => '20.000'
            ]);

        DB::table('layanans')->insert([
            'nama_layanan' => 'Tindakan Injeksi',
            'harga_layanan' => '15.000'
            ]);
    }
}

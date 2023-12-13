<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Peminjaman;

class TbPeminjamanSeeder extends Seeder
{
    public function run()
    {
        Peminjaman::insert([
            'id_mobil' => 1, 
            'id_user' => 1,
            'tgl_mulai' => now(),
            'tgl_selesai' => now()->addDays(5),
            'jumlah_biaya' => 750000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Peminjaman::insert([
            'id_mobil' => 2, 
            'id_user' => 2,
            'tgl_mulai' => now()->addDays(2),
            'tgl_selesai' => now()->addDays(7),
            'jumlah_biaya' => 1080000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

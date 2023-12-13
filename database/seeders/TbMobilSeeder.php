<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mobil;

class TbMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Mobil::insert([
            'merk' => 'Toyota',
            'model' => 'Avanza',
            'no_plat' => 'B 1234 AB',
            'status' => 'Tersedia',
            'tarif' => 150000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Mobil::insert([
            'merk' => 'Honda',
            'model' => 'Jazz',
            'no_plat' => 'C 5678 CD',
            'status' => 'Tersedia',
            'tarif' => 200000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Mobil::insert([
            'merk' => 'Suzuki',
            'model' => 'Ertiga',
            'no_plat' => 'D 9101 DE',
            'status' => 'Dipinjam',
            'tarif' => 180000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

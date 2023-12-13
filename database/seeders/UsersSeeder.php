<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::insert([
            'username' => 'testuser',
            'nama' => 'Test User',
            'alamat' => 'Jalan Test No. 123',
            'no_telp' => '081234567890',
            'no_sim' => 'SIM123456',
            'password' => bcrypt('password123'), 
        ]);
    }
}

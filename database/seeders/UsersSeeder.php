<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'email' => 'testuser',
            'nama' => 'Test User',
            'alamat' => 'Jalan Test No. 123',
            'no_telp' => '081234567890',
            'no_sim' => 'SIM123456',
            'password' => bcrypt('password123'), 
        ]);
    }
}

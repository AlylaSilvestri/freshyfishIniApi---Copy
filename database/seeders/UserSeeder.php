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
    public function run()
    {
        // Menambahkan data user pembeli
        DB::table('users')->insert([
            'name' => 'John Doerr',
            'phone_number' => '081234567890',
            'email' => 'johnrr@example.com',
            'password' => Hash::make('password123'), // Jangan lupa untuk hash password
            'address' => 'Jl. Contoh No. 1',
            'ID_role' => 1, // Pembeli
        ]);

        // Menambahkan data user penjual
        DB::table('users')->insert([
            'name' => 'Jane Smith',
            'phone_number' => '089876543210',
            'email' => 'jane@example.com',
            'password' => Hash::make('password123'),
            'address' => 'Jl. Toko No. 2',
            'ID_role' => 2, // Penjual
        ]);

        // Menambahkan data user pembeli
        DB::table('users')->insert([
            'name' => 'Awawawa',
            'phone_number' => '081234567890',
            'email' => 'wawa@example.com',
            'password' => Hash::make('password123'), // Jangan lupa untuk hash password
            'address' => 'Jl. Contoh No. 33',
            'ID_role' => 1, // Pembeli
        ]);

        // Menambahkan data user penjual
        DB::table('users')->insert([
            'name' => 'Budi Santoso',
            'phone_number' => '089876543210',
            'email' => 'budi@example.com',
            'password' => Hash::make('password123'),
            'address' => 'Jl. Toko No. 2',
            'ID_role' => 2, // Penjual
            //'ID_toko' => 6
        ]);

        // Menambahkan data user penjual
        DB::table('users')->insert([
            'name' => 'Pramesyaila Hendri',
            'phone_number' => '089633998310',
            'email' => 'lala@example.com',
            'password' => Hash::make('password123'),
            'address' => 'Jl. Toko No. 2',
            'ID_role' => 1,
            //'ID_toko' => 6
        ]);
    }
}

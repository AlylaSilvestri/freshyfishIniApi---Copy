<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Menambahkan role pembeli dan penjual ke tabel roles
        DB::table('roles')->insert([
            ['role_name' => 'pembeli'],
            ['role_name' => 'penjual'],
        ]);
    }
}

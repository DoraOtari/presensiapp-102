<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('jabatan')->insert(
        [
            'nama' => 'Direktur',
            'gaji' => 8000000,
            'status' => 'tetap',
        ]
        );
       DB::table('jabatan')->insert(
        [
            'nama' => 'Manager',
            'gaji' => 6000000,
            'status' => 'tetap',
        ]
        );
       DB::table('jabatan')->insert(
        [
            'nama' => 'Staff',
            'gaji' => 3000000,
            'status' => 'tetap',
        ]
        );
    }
}

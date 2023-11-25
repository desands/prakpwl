<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert(
            [
                [
                    'nama' => 'Mahasiswa 1',
                    'npm' => '552012001',
                    'id_prodi' => 1
                ],
                [
                    'nama' => 'Mahasiswa 2',
                    'npm' => '552012002',
                    'id_prodi' => 2
                ]
            ]
        );
    }
}

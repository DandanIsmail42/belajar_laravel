<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 


class Pendidikan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pendidikan = [
            ['id' => Str::uuid(), 'nama_pendidikan' => 'Udin', 'tahun_lulus' => 2019, 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('pendidikan')->insert($pendidikan);
    }
}

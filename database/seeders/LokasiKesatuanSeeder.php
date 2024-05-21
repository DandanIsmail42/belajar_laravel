<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 

class LokasiKesatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasi_lemasmil = [
            ['id' => Str::uuid(), 'nama_lokasi_lemasmil' => 'Udin',
            'latitude' => '123456', 'longitude' => '123456',
            'panjang' => '123456', 'lebar' => '123456',
            'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('lokasi_lemasmil')->insert($lokasi_lemasmil);
    }
}

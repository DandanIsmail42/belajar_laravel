<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 

class Pangkat extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pangkat = [
            ['id' => Str::uuid(), 'nama_pangkat' => 'Udin','created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('pangkat')->insert($pangkat);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 

class Matra extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matra = [
            ['id' => Str::uuid(), 'nama_matra' => 'Udin','created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('matra')->insert($matra);
    }
}

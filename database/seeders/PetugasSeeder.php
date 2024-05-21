<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugas = [
            ['id' => Str::uuid(), 'nama' => 'Udin',
            'pangkat_id' => "2b280ceb-6038-416a-8a43-d39eba439520",
            'kesatuan_id' => '0e11248e-e3c3-4869-bf9e-6ea02be8bac4',
            'tempat_lahir' => 'Udin', 
            'tanggal_lahir' => now(),
            'jenis_kelamin' => 1, 
            'provinsi_id' => 'b815fde4-9c35-4bd4-bb66-2113c348140b',
            'kota_id' => '8021dcfc-3611-45d4-beb0-cd8c217380c1',
            'alamat' => 'Udin',
            'agama_id' => 'b2e6a24b-2f09-4573-91d3-4d18b2e4c664',
            'status_kawin_id' => '0257d76a-b832-4fb0-aadc-b02b0c4df32f',
            'pendidikan_id' => '414dc2e2-ac97-4e88-8a02-a2d34468f134',
            'bidang_keahlian_id' => 'e01048c3-0b4e-4cbf-a2d6-03586ef63c7d',
            'foto_wajah' => 'Udin',
            'jabatan' => 'Udin',
            'divisi' => 'Udin',
            'nomor_petugas' => 'Udin',
            'lokasi_otmil_id' => 'c7d337f2-82e2-4526-b6b4-82374509763a',
            'lokasi_lemasmil_id' => 'b99db886-2cce-4652-ac1d-0a4ab431bd96',
            'grup_petugas_id' => '58e02b38-ba92-4eea-9b1a-2f9907b9bfd1',
            'nrp' => 'Udin',
            'matra_id' => '4cf07e3c-e7a1-4245-b27d-2fc8855f60b2',
            'foto_wajah_fr' => 'Udin',
            'lokasi_kesatuan_id' => '01ca1139-38be-48a5-84f0-45cad2eb7e86',
            'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('petugas')->insert($petugas);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = "test1234";
        $user = 
            ['id' => Str::uuid(),
            'username' => 'udin',
            'password' => Hash::make($password),
            "user_role_id" => "13fd6734-d9f5-4029-95f5-a265f6604eb9",
            "email" => "udin@gmail.com",
            "phone" => "08123123123", 
            "lokasi_otmil_id" => "c7d337f2-82e2-4526-b6b4-82374509763a",
            "lokasi_lemasmil_id" => "b99db886-2cce-4652-ac1d-0a4ab431bd96",
            "is_suspended" => 0,
            "petugas_id" => "824c8730-b17a-4773-83ae-b45b846dbd11",
            "image" => "udin.jpg",
            "last_login" => now(),
            "expiry_date" => now(),
            "created_at" => now(),
            'updated_at' => now()

          ];
        DB::table('user')->insert($user);
    }
}

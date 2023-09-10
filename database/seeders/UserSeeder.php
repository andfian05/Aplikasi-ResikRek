<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'nama' => 'Superadmin ResikRek',
            'penempatan' => '',
            'foto' => '',
            'username' => 'Supera_rek',
            'password' => Hash::make('Superad52@admin'),
            'role' => 'Superadmin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'nama' => 'Admin ResikRek',
            'penempatan' => '',
            'foto' => '',
            'username' => 'Admin_rek',
            'password' => Hash::make('Adminn13@admin'),
            'role' => 'Admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}

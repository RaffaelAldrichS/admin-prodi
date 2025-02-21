<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create([
            'nama' => 'admin',
        ]);
        Role::create([
            'nama' => 'dosen',
        ]);
        Role::create([
            'nama' => 'mahasiswa',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        TahunAjaran::create([
            'tahun_ajaran' => '2021/2022',
        ]);
        TahunAjaran::create([
            'tahun_ajaran' => '2022/2023',
        ]);
        TahunAjaran::create([
            'tahun_ajaran' => '2023/2024',
        ]);
        TahunAjaran::create([
            'tahun_ajaran' => '2024/2025',
        ]);
    }
}

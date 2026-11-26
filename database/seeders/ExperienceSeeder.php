<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        Experience::create([
            'posisi' => 'Creative Designer',
            'nama_kegiatan' => 'Ethicare Anti-Bullying Campaign',
            'deskripsi' => 'Membuat desain visual untuk mendukung kampanye edukasi anti-bullying.',
            'tahun' => '2026'
        ]);

        Experience::create([
            'posisi' => 'PDD & Graphic Designer',
            'nama_kegiatan' => 'YRI Goes To School',
            'deskripsi' => 'Membantu kebutuhan publikasi, dokumentasi, dan desain grafis kegiatan.',
            'tahun' => '2026'
        ]);
    }
}

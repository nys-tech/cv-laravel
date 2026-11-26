<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Experience;

class CVController extends Controller
{
    public function index()
    {
        $nama = "Neysha Permata Putri";
        $nim = "5325600088";
        $prodi = "Teknologi Rekayasa Multimedia";
        $email = "neyshapermata3@email.com";
        $status = "Mahasiswa Aktif";

        $deskripsi = "Saya adalah mahasiswa Teknologi Rekayasa Multimedia yang memiliki ketertarikan pada bidang desain dan multimedia kreatif. Saya senang mempelajari hal-hal baru serta mengembangkan kemampuan melalui berbagai proyek multimedia dan teknologi.";

        $education = [
            [
                "school" => "Politeknik Elektronika Negeri Surabaya",
                "major" => "Teknologi Rekayasa Multimedia",
                "year" => "2025 - Sekarang"
            ],
            [
                "school" => "SMKS Sepuluh Nopember Sidoarjo",
                "major" => "Pendidikan sebelumnya",
                "year" => "2022 - 2025"
            ]
        ];

        $projects = [
            [
                "title" => "Kreatica",
                "category" => "Animasi",
                "year" => 2025,
                "description" => "Project aplikasi pengelolaan keuangan UMKM. Berperan dalam pembuatan animasi dan membantu mengembangkan visual project."
            ],
            [
                "title" => "Video Mapping",
                "category" => "Multimedia",
                "year" => 2026,
                "description" => "Project video mapping dengan konsep visual dan audio untuk menghasilkan tampilan visual yang menarik."
            ],
            [
                "title" => "Portfolio Website",
                "category" => "Web",
                "year" => 2026,
                "description" => "Website portfolio pribadi yang dikembangkan menggunakan HTML, CSS, dan PHP."
            ]
        ];

        usort($projects, function ($a, $b) {
            return $b['year'] <=> $a['year'];
        });

        $skills = Skill::all();
        $experiences = Experience::all();

        return view('cv.index', compact(
            'nama',
            'nim',
            'prodi',
            'email',
            'status',
            'deskripsi',
            'education',
            'projects',
            'skills',
            'experiences'
        ));
    }
}

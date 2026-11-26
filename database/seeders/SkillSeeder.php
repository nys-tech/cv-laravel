<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            'Canva',
            'Figma',
            'CapCut',
            'Inkscape',
            'Microsoft Excel',
            'Graphic Design',
            'Social Media Design'
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'nama_skill' => $skill
            ]);
        }
    }
}

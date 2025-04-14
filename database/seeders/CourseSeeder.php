<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'LPIC-1',
            'LPIC-2',
            'CCNA',
            'Network+',
            'Security+',
        ];

        foreach ($courses as $courseName) {
            $course = Course::create([
                'name' => $courseName,
                'description' => "Seja certificado {$courseName}!",
            ]);

            for ($i = 1; $i <= 5; $i++) {
                $module = $course->modules()->create([
                    'name' => "{$i}º Módulo",
                    'order' => $i,
                ]);

                for ($j = 1; $j <= 3; $j++) {
                    $module->lessons()->create([
                        'name' => "{$j}ª Aula do {$i}º Módulo",
                        'link' => "https://www.youtube.com/embed/pmyyV-By_Jo?list=PLIHE326iMCHDcC35goN6r1tL3WiOyDIJc",
                        'order' => $j,
                    ]);
                }
            }
        }
    }
}

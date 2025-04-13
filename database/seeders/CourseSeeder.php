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

        foreach ($courses as $course) {
            Course::create([
                'name' => $course,
                'description' => "Seja certificado {$course}!",
            ]);
        }
    }
}

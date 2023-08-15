<?php

namespace Database\Seeders;

use App\Models\Audience;
use App\Models\Course;
use App\Models\Goal;
use App\Models\Image;
use App\Models\Requirement;
use App\Models\Section;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::factory(40)->create();

        foreach ($courses as $course) {
            Image::factory(1)->create([
                'imageable_id' => $course->id,
                'imageable_type' => 'App\Models\Course'
            ]);

            Requirement::factory(4)->create([
                'course_id' =>$course->id
            ]);

            Goal::factory(4)->create([
                'course_id' =>$course->id
            ]);

            Audience::factory(4)->create([
                'course_id' =>$course->id
            ]);

            Section::factory(4)->create([
                'course_id' =>$course->id
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CourseSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_subject')->insert([
            [
                'course_id' => 1,
                'subject_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}

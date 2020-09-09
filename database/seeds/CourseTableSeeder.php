<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'name' => 'PHP',
                'description' => 'fullstack trong thời gian 2 tiếng',
                'duration' => 2,
                'image' => 'php_image.png',
                'start_day' => '2020-08-10',
                'end_day' => '2020-10-10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Ruby',
                'description' => 'fullstack trong thời gian 2 tháng',
                'duration' => 2,
                'image' => 'ruby_image.png',
                'start_day' => '2020-08-10',
                'end_day' => '2020-10-10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Android',
                'description' => 'fullstack trong thời gian 2 tháng',
                'duration' => 2,
                'image' => 'android_image.png',
                'start_day' => '2020-08-10',
                'end_day' => '2020-10-10',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
             'user_id' => 1,
             'done' => 'Hoàn thành test git',
             'block' => 'Khó khăn trong việc dịch tài liệu',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
         ],
         [
             'user_id' => 2,
             'done' => 'Hoàn thành test php',
             'block' => 'Không có khó khăn',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
         ],
         [
             'user_id' => 3,
             'done' => 'Hoàn thành quicktask',
             'block' => 'Khó khăn nhiều',
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
         ],
     ]);
    }
}

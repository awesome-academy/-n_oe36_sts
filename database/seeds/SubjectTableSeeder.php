<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'name' => 'git flow',
                'description' => 'Thành thạo flow git của công ty',
                'image' => 'git.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'php cơ bản',
                'description' => 'Nắm vững kiến thức php cơ bản',
                'image' => 'php_basic.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'laravel',
                'description' => 'Thao tác với framework Laravel cơ bản',
                'image' => 'laravel.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}

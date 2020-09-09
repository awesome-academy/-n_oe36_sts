<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Nguyễn Đình Hòa',
                'phone' => '0905363184',
                'gender' => '1',
                'email' => 'dinhhoa1994@gmail.com',
                'address' => 'Quảng Nam',
                'university' => 'Bách Khoa Đà Nẵng',
                'birthday' => '1994-10-02',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'username' => 'Trần Ngọc Tân',
                'phone' => '0905363184',
                'gender' => '1',
                'email' => 'ngoctan1994@gmail.com',
                'address' => 'Quảng Nam',
                'university' => 'Bách Khoa Đà Nẵng',
                'birthday' => '1994-10-02',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'username' => 'Nguyễn Mỹ Linh',
                'phone' => '0905363184',
                'gender' => '0',
                'email' => 'mylinh1999@gmail.com',
                'address' => 'Quảng Nam',
                'university' => 'Bách Khoa Đà Nẵng',
                'birthday' => '1999-10-02',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}

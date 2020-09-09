<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(TaskTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(CourseUserTableSeeder::class);
        $this->call(CourseSubjectTableSeeder::class);
        $this->call(UserSubjectTableSeeder::class);

    }
}

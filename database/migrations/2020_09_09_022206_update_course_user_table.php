<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCourseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_user', function (Blueprint $table) {
            $table->dropForeign('course_user_subject_id_foreign');
            $table->dropColumn('subject_id');
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade')
            ->onUpdate('cascade')
            ->usigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_user', function (Blueprint $table) {
         $table->dropForeign('course_user_user_id_foreign');
         $table->dropColumn('user_id');
         $table->foreignId('subject_id')
         ->constrained('subjects')
         ->onDelete('cascade')
         ->onUpdate('cascade')
         ->usigned();

     });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_subject', function (Blueprint $table) {
           $table->id();
           $table->foreignId('course_id')
           ->constrained('courses')
           ->onDelete('cascade')
           ->onUpdate('cascade')
           ->usigned();
           $table->foreignId('subject_id')
           ->constrained('subjects')
           ->onDelete('cascade')
           ->onUpdate('cascade')
           ->usigned();
           $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_subject');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSubjectTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('user_subject', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')
				->constrained('users')
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
	public function down() {
		Schema::dropIfExists('user_subject');
	}
}

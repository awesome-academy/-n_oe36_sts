<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {
	protected $table = 'courses';
	protected $fillable = [
		'name',
		'description',
		'duration',
		'image',
		'start_day',
		'end_day',
	];

	public function users()
	{
		return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
	}

	public function subjects()
	{
		return $this->belongsToMany(Subject::class, 'course_subject', 'course_id', 'subject_id');
	}
}

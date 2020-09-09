<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {
	protected $table = 'subjects';
	protected $fillable = [
		'name',
		'description',
		'image',
	];

	public function courses()
	{
		return $this->belongsToMany(Course::class, 'course_subject', 'subject_id', 'course_id');
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'user_subject', 'subject_id', 'user_id');
	}
}

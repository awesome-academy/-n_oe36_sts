<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected  $table = 'tasks';
    protected $fillable = [
        'user_id',
        'done',
        'block',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

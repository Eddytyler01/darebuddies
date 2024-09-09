<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
		'user_id', 'question', 'status', 'a1', 'a2', 'a3', 'a4', 'correct',
    ];
}

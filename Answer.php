<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
		'user_id', 'ques_id', 'ans_given'
    ];

    public function question()
    {
        return $this->belongsTo('App\Question', 'ques_id');
    }
}

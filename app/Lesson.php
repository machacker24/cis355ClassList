<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];
    
   public function assignments()
{
	return $this->hasMany('App\Assignment');
}
}

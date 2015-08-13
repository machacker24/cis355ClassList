<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function project()
    {
        return $this->belongsTo('App\Lesson');
    }
    
    protected $guarded = [];
}

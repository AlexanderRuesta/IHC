<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function programming()
    {
        return $this->belongsTo(Programming::class);
    }
}

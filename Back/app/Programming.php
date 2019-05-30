<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programming extends Model
{   

    protected $guarded = [];

    public function courses()
    {
        // return $this->hasMany(Course::class);
        return $this->belongsToMany(Course::class, 'programmings', 'id', 'course_id');

    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'students_programmings', 'programming_id', 'student_id');
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'programmings_documents', 'id' /* de roles */, 'id' /* de modules */);
    }


}

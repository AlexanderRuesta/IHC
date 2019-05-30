<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    
    public function getCourse(Request $request){

        $course_id = $request->input('course_id');

        $course = Course::where([
            ['id', '=', $course_id],
        ])->first();
            
        if($course !== null)
        {
            return $course;
        }
        else{
            // return json_encode(null);
            echo json_encode(null);
        }
    }
}
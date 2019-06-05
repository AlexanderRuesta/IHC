<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
            return response()->json($course)
                            ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);;;
        }
        else{
            // return json_encode(null);
            return response()->json(null)
                            ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);;;
        }
    }
}
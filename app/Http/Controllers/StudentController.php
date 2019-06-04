<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function getStudent(Request $request){

        $student_id = $request->input('id');

        $student = Student::where([
            ['id', '=', $student_id],
        ])->first();
            
        if($student !== null)
        {
            return response()->json($student)
                             ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);;;
        }
        else{
            // return json_encode(null);
            return response()->json(null)
                             ->setStatusCode(Response::HTTP_OK, Response::$statusTexts[Response::HTTP_OK]);;;
        }
    }
}


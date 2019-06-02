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
            return $student;
        }
        else{
            // return json_encode(null);
            echo json_encode(null);
        }
    }
}


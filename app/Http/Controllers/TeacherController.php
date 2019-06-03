<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;


class TeacherController extends Controller
{
    public function getTeacher(Request $request){

        $teacher_id = $request->input('id');

        $teacher = Teacher::where([
            ['id', '=', $teacher_id],
        ])->first();
            
        if($teacher !== null)
        {   
            $programmings = $teacher->programmings;
            $programmings->courses;
            $programmings->documents;

            // foreach ($programmings as $value) {
            //     // dd($value);
            //     // $value->courses;
            // }
           return $teacher;
        }
        else{
            // return json_encode(null);
            echo json_encode(null);
        }
    }
}

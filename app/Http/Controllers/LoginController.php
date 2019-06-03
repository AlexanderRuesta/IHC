<?php


namespace App\Http\Controllers;
use App\Student;
use App\Teacher;
use App\Programming;

use Illuminate\Http\Request;

class LoginController extends Controller
{   

    public function login(Request $request)
    {   
        
        $username = $request->input('email');
        $password = $request->input('password');

        $student = Student::where([
                            ['email', '=', $username],
                            ['password', '=', $password],
                    ])->first();
        
        $teacher = Teacher::where([
                        ['email', '=', $username],
                        ['password', '=', $password],
                 ])->first();        
        
       

        if($student !== null){

             
              $programmings = $student->programmings;
       
                foreach ($programmings as $key => $value) {
                    $value->courses;
                    $value->teachers;
                    $value->documents;
                }

            return response()->json(array('tipo'=>1,'usuario' => $student));
        }
        else if($teacher !== null){
            return response()->json(array('tipo'=>0,'usuario' => $teacher));
        }
        else{
            return response()->json(array('tipo'=>-1,'usuario' => 'No existe'));
        }

    }
}

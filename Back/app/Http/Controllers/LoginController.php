<?php


namespace App\Http\Controllers;
use App\Student;
use App\Teacher;
use App\Programming;

use Illuminate\Http\Request;

class LoginController extends Controller
{   
    // protected $request;

    // public function __construct(Request $request){
    //     $this->request = $request;
    // }


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
        
        
        $programmings = $student->programmings;
        $programmings_sin_pivote = array();
       
        foreach ($programmings as $key => $value) {
            $value->courses;
            $value->teachers;
            $value->documents;
        }

        if($student !== null){
            return array('tipo'=>1,'usuario' => $student);
        }
        else if($teacher !== null){
            return array('tipo'=>0,'usuario' => $teacher);
        }
        else{
            return array('tipo'=>-1,'usuario' => 'No existe');
        }

    }
}

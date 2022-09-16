<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
              'name'=> 'required | max:191',
              'email'=> 'required | max:191',
              'phone'=> 'required | max:191',
              'corse'=> 'required | max:191',
        ]);
        if ($validator ->fails()) {
           return response()->json([
            'status'=>400,
            'errors'=>$validator->messages(),
           ]);
        }
        else {
               $student = new Student;
               $student->name = $request->input('name');
               $student->email = $request->input('email');
               $student->phone = $request->input('phone');
               $student->corse = $request->input('corse');
               $student->save();
               return response()->json([
                'status'=>400,
                'messages'=>"Ajout avec succes",
               ]);
        }
       
    }
}

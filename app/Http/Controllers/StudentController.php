<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    // function to handle insert functionality
    function addStudent(Request $request)
    {



        $student = new Student();

        $student->username = $request->username;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->age = $request->age;


        $is_added = $student->save();

        $data = Student::all();


        if ($is_added) {
            return view('home', ['data' => $data]);
        } else {
            return response()->json(["success" => false, "msg" => "there is an error to store the data"]);
        }
    }


    // function to handle getting data functionality
    function getStudents()
    {
        $data = Student::all();
        return view('home', ["data" => $data]);
    }

    function deleteStudent($studentId)
    {
        $id = Student::destroy($studentId);

        if ($id) {
            $data = Student::all();
            return view('home', ["data" => $data]);
        } else {
            return response()->json(["success" => false, "msg" => "there is an error to delete the student data"]);
        }
    }

     function editStudent($studentId){
        $student = Student::find($studentId);

        if ($student) {
            return view('add-edit', ['data' => $student]);
        } else {
            return redirect('/home')->withErrors(['msg' => 'Student not found.']);
        }
    }


    function updateStudent(Request $request,$studentId){
        $student = Student::find($studentId);
        $student->username = $request->username;
        $student->email = $request->email;
        $student->age = $request->age;

        $_isUpated = $student->save();
        if($_isUpated){
            $data = Student::all();
            return view('home',['data'=> $data]);
        }else{
            return "data not updated ";
        }
    }



}

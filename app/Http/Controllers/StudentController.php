<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function list(){
        //$students = array();
        $students = array();
        for($i=1;$i<=10;$i++){
            $student = array(
                "id"=>$i,
                "name"=>"student $i",
                "dob"=>"12.12.12"
            );
            $students[] = (object)$student;
        }

        return view('students.list')
               ->with('students',$students);
    }
    //
    function home($id){
       
        $name = "<h1>Karim</h1>";
        $dob = "12.12.12";
        return view('students.home')
        ->with('n',$name)
        ->with('id',$id)
        ->with('dob',$dob);
    }
}

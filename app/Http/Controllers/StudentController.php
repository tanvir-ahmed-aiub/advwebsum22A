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
    function create(){
        return view('students.create');
    }
    function createSubmit(Request $req){

        //$req->validate([],[]);
        $this->validate($req,
             [
                "name"=>"required|max:10",
                "id"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})+$/i",
                "dob"=>"required",
                "email"=>'required|email',
                "password"=>"required",
                "conf_password"=>"required|same:password"
             ],
             [
                 "name.required"=> "Please provide your name",
                 "name.max"=> "Name should not exceed 10 characters"
             ]
            );

        return "Submitted with valid value";
    }
}

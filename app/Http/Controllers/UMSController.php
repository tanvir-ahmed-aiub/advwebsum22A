<?php

namespace App\Http\Controllers;
use App\Models\UMSStudent;
use Illuminate\Http\Request;

class UMSController extends Controller
{
    function list(){
        /*$students = UMSStudent::paginate(15);;
        return view("UMS.list",compact('students',$students));*/
        $students = UMSStudent::orderBy('id','desc')->take(5)->get();
        return view("UMS.list",compact('students',$students));
    }

    function __construct()
    {
        //$this->middleware('');
    }
    //
    function login(){
        return view("ums.login");
    }
    function loginSubmit(Request $req){
        $this->validate($req,[
            "uname"=>"required|exists:students_info,username"
        ]);
        $user = UMSStudent::where('username',$req->uname)
                            ->where('password',$req->pass)->first();
        if($user){
            //
            session()->put('user',$user->username);
            return redirect()->route('student.ums.home');
        }
        else{
            session()->flash('msg','Username and password is invalid');
            return back();
        }
    }
    function register(){
        
        return view('ums.register');
    }
    function registerSubmit(Request $req){
        $this->validate($req,[
            "id"=>"required|unique:students_info,user_id",
            "pro_pic"=>"required|mimes:pdf,docx,doc,jpg"
        ]);
        $name =  $req->file('pro_pic')->getClientOriginalName();
        $ext = $req->file('pro_pic')->getClientOriginalExtension();
        $path = "profile_images/";
        $file_name  = time()."_$name";
        $req->file('pro_pic')->storeAs('public/'.$path,$file_name);
        $s1 = new UMSStudent();
        $s1->user_id = $req->id;
        $s1->username = $req->id;
        $s1->name = $req->name;
        $s1->dob = $req->dob;
        $s1->cgpa = 2.34;
        $s1->d_id = 1;
        $s1->pro_pic = 'storage/'.$path.$file_name;
        $s1->password = $req->password;
        $s1->save(); 
        session()->flash('msg','User Created Successfully');
        return back();

    }
    function home(){
        return view('ums.home');
    }
    function logout(){
        //session()->flush();
        session()->forget('user');
        return redirect()->route('login');
    }
}

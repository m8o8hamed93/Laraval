<?php

namespace App\Http\Controllers;
use App\Models\departments; 
use App\Models\student; 
use Illuminate\Http\Request;


class userController extends Controller
{
    //
    // function Message(){
    //     echo " welcome to laravel ";
    // }
    // public function printDetails($name,$email){
    //     echo 'name' .$name. ' & email' .$email;
    // }
    public function index(){
        if (auth()->check()) {
       $data = student::orderBy('id','desc')->get();
       return view('index',['data'=>$data]);
        }else {
            return redirect(url('/login'));
        }
    }
    public function create(){
        $data = departments::get();
        return view('register',['data'=> $data]);
    }
    public function store(Request $request){

        // dd($request);
        // echo $request->name;
        // echo $request->input('name');
       $data= $this->validate($request , [
            "name"     => "required|min:5",
            "email"    => "required|email",
            "password" => "required|min:6",
            "linkedIn" => "required|url"
        ] );
        $data['password'] = bcrypt($data['password']);
        $op = student::create($data);
        if ($op) {
            $message =  "raw inserted";
        } else {
            $message = "error try again";
        }        
        // session()->put('Message',$message);
        session()->flash('Message',$message);
        return redirect(url('/student'));
    }

    public function edit($id){
        $data = student::where('id',$id)->get();
        return view('edit',["data"=>$data]);
    }
    
    public function update(Request $request){
        $data= $this->validate($request , [
            "name"     => "required|min:5",
            "email"    => "required|email",
            "linkedIn" => "required|url",
            "id"       => "required"
        ] );

        $op =    student::where('id',$request->id)->update($data);
        if ($op) {
            # code...
            $message =  "raw updated";
        } else {
            $message =  "error try again ";
        }
        session()->flash('Message',$message);
        return redirect(url('/student'));
        
    }

    public function delete($id){
        $op =    student::where('id',$id)->delete();
        if ($op) {
            # code...
            $message = "raw removed";
        } else {
            $message =  "error try again ";
        }
        session()->flash('Message',$message);
        return redirect(url('/student'));
    }

    public function login(){
        return view('login');
    }

    public function DoLogin(Request $request){
        $data= $this->validate($request , [
            "email"    => "required|email",
            "password" => "required|min:6"
        ] );
       if(auth()->attempt($data)){
        return redirect(url('/student'));
       }else {
        return redirect(url('/login'));
       } 
    }
    public function logout(){
        auth()->logout();
        return redirect(url('/login'));

    }

    // public function shareData(){
    //     $data = ["name"=>"root account","age"=>"20","gpa"=>"3.1"];
    //     $teacherName="ahmed";
    //     return view('profile',["student"=>$data,"teacher"=>$teacherName]);
    //     // return view('profile')->with("student",$data)->with("teacher",$teacherName);
        
    // }


}

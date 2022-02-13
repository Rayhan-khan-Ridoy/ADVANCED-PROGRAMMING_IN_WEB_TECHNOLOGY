<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function list(){
     $students = array();
     for($i=0;$i<10;$i++){
         $student = array(
             "id" => $i+1,
             "name" =>"Student ".($i+1),
             "dept" => "CS"
         );
         $student = (object)$student;
         $students[] = $student;
     }

     $student = array(
         "id" => 11,
         "name" =>"RIDOY",
         "dept" => "CSE"
     );
     $student = (object)$student;
     $students[] = $student;

     return view('list')->with('students',$students);
 }
 public function create(){
     return view('create');
 }
 public function get(){
     $name = "RIDOY";
     $id = "123adcf";
     $courses = ["Pl1","pl2","DS","Algo","OOp1","OOP2","WT","ATP2","ATP3"];
     return view('get')
     ->with('name',$name)
     ->with('id',$id)
     ->with('courses',$courses);
 }
 public function myprofile(){

   $myprofile = array();

       $info = array(
           "id" => "17-34755-2",
           "name" =>"RIDOY ",
           "dept" => "CSE"
       );
       $info = (object)$info;
       $myprofile[] = $info;


   return view('profile')->with('myprofile',$myprofile);
}
public function education(){

  $education = array();

      $info = array(
          "year" => "2014",
          "degree" =>"ssc ",
          "grade" => "A+"
      );
      $info = (object)$info;
      $education[] = $info;


  return view('education')->with('education',$education);
}

public function details(Request $req){
//public function details($id,$name){
  //return "ok with id $id";
  //return view('details')
  //->with('id',$id)
  //->with('name',$name);
  return view('details')
  ->with('id',$req->id)
  ->with('name',$req->name);
}

public function registration(){
  return view('registration');
}


public function AfterRegis(Request $req){
  $req->validate(
              [
                  'name'=>'required|regex:/^[A-Z , a-z]+$/',
                  'id'=>'required|regex:/^[0-9 -]+$/|max:10',
                  'cgpa'=>'required|numeric|between:0.0,4.00',
                  'gender'=>'required',
                  'hobbies'=>'required'
            ]
                ,
            [
                'name.required'=>'Enter your name',
                'id.max'=>'id must not exceed 10 alphabets',
                'id.required'=>'Enter your aiub id XX-XXXXX-x',
            ]


            );

return view('AfterRegis')
  ->with('id',$req->id)
  ->with('name',$req->name)
  ->with('cgpa',$req->cgpa)
  ->with('gender',$req->gender)
  ->with('hobbies',$req->hobbies);

}


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
  public function viewAllStudents(){
                  $st = Student::get();

                  return response()->json($st);
  }
  public function addStudent(Request $req){

                    $st = new Student();

                    $st->name=$req->name;
                    $st->age=$req->age;
                    $st->dept_id=$req->dept_id;

                    $st->save();


                  //return "ok";


                  return response()->json($st);
  }
  public function editStudent(Request $req){

                    $st = Student::where('id',$req->id)->first();

                    $st->name=$req->name;
                    $st->age=$req->age;
                    $st->dept_id=$req->dept_id;

                    $st->save();


                  //return "ok";


                  return response()->json($st);
  }
  public function deletetStudent(Request $req){

                  $st = Student::where('id',$req->id)->delete();
                  return response()->json($st);
  }
}

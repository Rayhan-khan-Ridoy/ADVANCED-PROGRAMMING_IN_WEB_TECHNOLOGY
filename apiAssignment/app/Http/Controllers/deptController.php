<?php

namespace App\Http\Controllers;
use App\Models\Dept;

use Illuminate\Http\Request;

class deptController extends Controller
{
  public function viewAlldepts(){
                  $dt = Dept::get();


                  return response()->json($dt);
  }
  public function addDept(Request $req){

                    $dt = new Dept();

                    $dt->name=$req->name;
                    $dt->address=$req->address;


                    $dt->save();


                  //return "ok";


                  return response()->json($dt);
  }
  public function editDept(Request $req){

                    $dt = Dept::where('id',$req->id)->first();
                  //  dd($dt->students);

                    $dt->name=$req->name;
                    $dt->address=$req->address;

                    $dt->save();


                  //return "ok";

                  return response()->json($dt);
  }
  public function deletetStudent(Request $req){

                  $dt = Dept::where('id',$req->id)->delete();
                  return response()->json($dt);
  }
  public function deptStudentDetails(Request $req){

                    $dt = Dept::where('id',$req->id)->select('id','name')->first();

                    return response(
                                      [
                                        'id'=>$dt->id,
                                        'name'=>$dt->name,
                                        "students"=>$dt->students
                                      ]
                                   );

  }
}

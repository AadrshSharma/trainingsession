<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Request $request){
       $data = $request->only('name', 'email','mobile','age','password','address','city','state','pincode');
       $created = Student::create($data);
       return response()->json(['data' => 'created'], 200);
    }

    public function search(){
        $data = Student::all();
    }
}

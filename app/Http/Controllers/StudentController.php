<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
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
        return response()->json(['data' => $data], 200);
    }

    public function update(Request $request){

        $student = Student::where('id', $request->id)->first();

        $data = $request->only('name', 'email','mobile','age','password','address','city','state','pincode');

        $student->update($data);

        return response()->json(['data' => 'updated'], 200);
    }

    public function destroy(Request $request){
        $student = Student::where('id', $request->id)->first();
        $student->delete();
    }
    public function state(){
        $data = State::all();
        return response()->json(['data' => $data], 200);
    }


    public function city(Request $request){
        $data = City::where('state_id', $request->id)->get();
        return response()->json(['data' => $data], 200);
    }
}

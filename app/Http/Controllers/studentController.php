<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index(){
        $student = student::all();
        return view('students.index',['students'=>$student]);
    }
    public function create(){
        return view ('students.create');
    }
    public function store(request $request){
        $data = ($request->validate([
            'stu_id'=>'required|numeric',
            'name'=>'required',
            'city'=>'required',
            'contact'=>'required|numeric',
        ]));

        $newStudent = student::create($data);
            return redirect(route('student.index'));
    }

    public function edit(student $student){
        return view('students.edit',['student'=>$student]);
    }
    public function update(student $student, Request $request){
        $data = ($request->validate([
            'stu_id'=>'required|numeric',
            'name'=>'required',
            'city'=>'required',
            'contact'=>'required|numeric',
        ]));
        $student->update($data);
        return redirect(route('student.index'))->with('success','product updated successfully');
    }

    public function destroy(student $student){
        $student->delete();
        return redirect(route('student.index'))->with('success','product Deleted successfully');
    }
}

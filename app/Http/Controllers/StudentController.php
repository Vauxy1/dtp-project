<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index', [
            'students' => Student::get(),
        ]);      
    }



    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student= new Student();

        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;
        $student->class = $request->class;

        $student->save();

        return redirect()->back();
    }
    public function delete($id)
    {
        $student = Student::find($id)->delete();
        return redirect()->route('students.index');
    }
}
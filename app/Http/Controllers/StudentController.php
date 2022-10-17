<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all(); //fetch all products from DB
        return view('student.list', ['students' => $students]);
    }

    public function get_student_by_id($id){
        $student = Student::find($id);
        return view('student.detail', ['student' => $student]);
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', ['student' => $student]);
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->fullname = $request->fullname;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        $student->update();
        return $this->index();

    }
}

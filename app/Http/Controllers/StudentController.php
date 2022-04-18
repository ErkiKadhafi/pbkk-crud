<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all()->sortByDesc('created_at');
        return view('student.index', ['students' => $students]);
    }

    public function create()
    {
        return view('student.create');
    }

    public function post(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/', 'min:5', 'max:60'],
            'nisn' => 'required|numeric|digits:10',
            'school_origin' => 'required',
            'major' => 'required',
            'date_of_birth' => 'required',
        ]);
        Student::create($request->all());

        return redirect()->route('student.index')->with('success', 'A student successfully added to the list!');
    }

    public function destroy(Student $student)
    {
        // dd($student);
        Student::find($student->id)->delete();
        return redirect()->route('student.index')->with('danger', 'A student successfully deleted!');
    }

    public function edit(Student $student)
    {
        // dd($student);
        $student = Student::find($student->id);
        return view('student.edit', ['student' => $student]);
    }

    public function show(Student $student)
    {
        // dd($student);
        $student = Student::find($student->id);
        return view('student.show', ['student' => $student]);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/', 'min:5', 'max:60'],
            'nisn' => 'required|numeric|digits:10',
            'school_origin' => 'required',
            'major' => 'required',
            'date_of_birth' => 'required',
        ]);
        $student = Student::find($student->id)->update($request->all());
        return redirect()->route('student.index')->with('success', 'A student successfully edited!');
    }
}

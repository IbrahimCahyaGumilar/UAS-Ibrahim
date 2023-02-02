<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Request;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    public function user()
    {
        $students = Student::all();
        return view('student.user', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(StudentFormRequest $request)
    {
        $data = $request->validated();

        $student = Student::create($data);
        return redirect('/add-student')->with('message','Berhasil Ditambahkan');
    }

    
    public function edit($student_id)
    {
        $student = Student::find($student_id);
        return view('student.edit', compact('student'));
    }

    public function update(StudentFormRequest $request, $student_id)
    {
        $data = $request->validated();

        $student = Student::where('id', $student_id)->update([
            'name' => $data['name'],
            'kelas' => $data['kelas'],
            'nilai' => $data['nilai']
        ]);
        return redirect('/adminNilai')->with('message','Berhasil Diperbarui');
    }

    public function destroy($student_id)
    {
        $student = Student::find($student_id)->delete();
        return redirect('/adminNilai')->with('message','Berhasil Dihapus');
    }
}

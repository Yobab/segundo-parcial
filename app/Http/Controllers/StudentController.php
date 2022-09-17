<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAll()
    {
        return Student::all();
    }
    public function index()
    {
        $students = Student::all();
        return view('welcome', compact('students'));
    }
    public function delete($id)
    {
        return Student::find($id)->delete();
    }
    public function edit(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'grado' => 'required',
            'sexo' => 'required',
        ]);
        Student::find($id)->update($data);
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required',
            'grado' => 'required',
            'sexo' => 'required',
        ]);
        Student::insert($data);
    }
}
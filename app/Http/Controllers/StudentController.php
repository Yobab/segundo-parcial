<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAll()
    {
        return student::all();
    }
    public function index()
    {
        $students = student::all();
        return view('welcome', compact('students'));
    }
    public function delete($id)
    {
        return student::find($id)->delete();
    }
    public function edit(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'isbn' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'author' => 'required',
        ]);
        student::find($id)->update($data);
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'isbn' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'author' => 'required',
        ]);
        student::insert($data);
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    // CRUD OPERATIONS--
    // Cretae
    // Read
    // Update
    // Delete
    public function studentList()
    {
        $students = DB::table('students')->get();

        return view('student.index', compact('students'));
    }

    public function createStudent() {}
    public function storeStudent() {}

    public function editStudent() {}
    public function updateStudent() {}

    public function deleteStudent() {}

    public function datafill(){
        $records=DB::table('lists')->get();

        return view('student.list',compact('records'));
    }
}

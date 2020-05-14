<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller{

    public function allStudents() {
        $students = Student::getAllStudents();
        return view('students', ['data' => $students]);
    }

    public function showOneStudent($id) {
        return view('one-student', ['student' => Student::getStudentById($id)]);
    }
}



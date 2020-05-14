<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model {

    public static function getAllStudents(){
        $students = Student::all();
        return $students;
    }

    public static function getStudentById($id){
        $student = Student::find($id);
        return $student;
    }

    public function group() {
        return $this->belongsTo('App\Models\Group');
    }

    public function hobbies() {
        return $this->belongsToMany('App\Models\Hobby');
    }

}

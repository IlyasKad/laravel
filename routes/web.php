<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Group;
use App\Models\Student;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/groups', 'GroupController@allData')->name('groups');

Route::get('/students', 'StudentController@allStudents')->name('students');

Route::get('/one-group/{id}', 'GroupController@showOneGroup')->name('one-group');

Route::get('/one-student/{id}', 'StudentController@showOneStudent')->name('one-student');

Route::get('/hobbies', 'HobbyController@allData')->name('hobbies');

Route::get('/one-hobby/{id}', 'HobbyController@showOneHobby')->name('one-hobby');






















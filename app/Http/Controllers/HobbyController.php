<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobby;

class HobbyController extends Controller{

    public function allData() {
        return view('hobbies', ['data' => Hobby::getAllHobbies()]);
    }

    public function showOneHobby($id){
        return view('one-hobby', ['hobby' => Hobby::getHobbyById($id)]);
    }
}

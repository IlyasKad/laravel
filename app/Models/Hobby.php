<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model {

    public static function getAllHobbies() {
        $hobbies = Hobby::all();
        return $hobbies;
    }

    public static function getHobbyById($id) {
        $hobby = Hobby::find($id);
        return $hobby;
    }

    public function students() {
        return $this->belongsToMany('App\Models\Student');
    }
}

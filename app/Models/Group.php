<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Group extends Model {

    public static function getAllGroups(){
        $groups = Group::all();
        return $groups;
    }

    public static function getGroupById($id){
        $group = Group::find($id);
        return $group;
    }

    public function students() {
        return $this->hasMany('App\Models\Student');
    }
}

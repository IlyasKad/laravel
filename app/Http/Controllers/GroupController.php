<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller{

    public function allData() {
        return view('groups', ['data' => Group::getAllGroups()]);
    }

    public function showOneGroup($id){
        return view('one-group', ['group' => Group::getGroupById($id)]);
    }

}

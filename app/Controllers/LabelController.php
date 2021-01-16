<?php

namespace App\Controllers;

use App\Framework\DB;
use App\Framework\Request;

use App\Controllers\UserController as UserCtrl;

class LabelController {
    public function store(Request $req) {
        $myData = UserCtrl::me();

        $saveData = DB::table('labels')->create([
            'user_id' => $myData->id
        ]);
    }
    public function update($id, Request $req) {
        // 
    }
    public function delete($id) {
        // 
    }
}
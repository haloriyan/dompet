<?php

namespace App\Controllers;

use App\Framework\DB;
use App\Framework\Request;

use App\Controllers\UserController as UserCtrl;

class CashflowController {
    public function fetch(Request $req) {
        $user_id = $req->user_id;
        echo json_encode(['id' => $user_id]);
    }
}
<?php

namespace App\Controllers;

use App\Framework\DB;
use App\Framework\Request;

use App\Controllers\UserController as UserCtrl;

class WishlistController {
    public function get($userID) {
        return DB::table('wishlists')->select()->where('user_id', '=', $userID)->get();
    }
    public function store(Request $req) {
        $myData = UserCtrl::me();

        $saveData = DB::table('wishlists')->create([
            'user_id' => $myData->id,
            'name' => $req->name,
            'price' => $req->price,
        ]);

        return redirect('wishlist');
    }
    public function update(Request $req) {
        // 
    }
    public function delete($id) {
        // 
    }
}
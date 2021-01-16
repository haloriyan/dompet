<?php

namespace App\Controllers;

use App\Framework\DB;
use App\Framework\Auth;
use App\Framework\Request;

use App\Controllers\WishlistController as WishlistCtrl;

class UserController {
    public static function me() {
        return Auth::guard('user')->user();
    }
    public function loginPage() {
        return view('login');
    }
    public function registerPage() {
        return view('register');
    }
    public function login(Request $req) {
        $loggingIn = Auth::guard('user')->attempt([
            'email' => $req->email,
            'password' => $req->password
        ]);

        if (!$loggingIn) {
            return redirect('login', [
                'message' => "Wrong email and/or password"
            ]);
        }

        return redirect('home');
    }
    public function register(Request $req) {
        $saveData = DB::table('users')->create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => md5($req->password),
            'is_active' => 1
        ]);

        if (!$saveData) {
            die("error while inserting data");
        }

        return redirect('login');
    }
    public function logout() {
        // 
    }
    public function home() {
        $myData = self::me();

        return view('user.home', [
            'myData' => $myData
        ]);
    }
    public function wishlist() {
        $myData = self::me();
        $wishlists = WishlistCtrl::get($myData->id);

        return view('user.wishlist', [
            'myData' => $myData,
            'wishlists' => $wishlists
        ]);
    }
    public function labels() {
        $myData = self::me();

        return view('user.labels', [
            'myData' => $myData
        ]);
    }
    public function report() {
        $myData = self::me();

        return view('user.report', [
            'myData' => $myData
        ]);
    }
}
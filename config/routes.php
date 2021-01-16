<?php

return [
    '/' => function() {
        return view('welcome');
    },
    'home' => "GET:UserController@home",
    'login' => "GET:UserController@loginPage",
    'loginAction' => "POST:UserController@login",
    'register' => "GET:UserController@registerPage",
    'registerAction' => "POST:UserController@register",
    'logout' => "GET:UserController@logout",
    'labels' => "GET:UserController@labels",
    'report' => "GET:UserController@report",
    
    'wishlist' => "GET:UserController@wishlist",
    'wishlist/store' => "POST:WishlistController@store",
    'wishlist/{id}/update' => "POST:WishlistController@update",
    'wishlist/{id}/delete' => "GET:WishlistController@delete",

    'cashflow/fetch' => "POST:CashflowController@fetch",
];

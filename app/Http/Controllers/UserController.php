<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
$data = [
    'name' => 'Sam',
    'email' => 'Sam@laravel.com',
    'password'=> bcrypt('password'),
];
//User::create($data);

//$user = User::all();
       // return $user;
        return $data;
}


}

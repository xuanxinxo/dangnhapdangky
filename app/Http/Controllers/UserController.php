<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

}
public function Register(Request $request){
    $input =$request->validate([
        'name' => 'required|string',
        'email'=>'required|email|unique:users',
        'password'=>'required',
        'c_password'=>'required|same:password'
    ]);
    $input['password']=bcrypt($input['password']);
    User::create($input)
    echo'
    <script>
    alert("đăng ký thành công vui lòng đăng nhập");
    window.location.assign("login");
    '

}
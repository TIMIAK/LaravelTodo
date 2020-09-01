<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
       /* DB::insert("insert into users(name,email,password) values(?,?,?)",[
            'Timothy','timothy@gmail.com','password'
        ]);
        DB::update('update users set name = "Timbaron" where id=1');
        */
        DB::delete('delete from users where id=1');
        $users = DB::select('select * from users');
        return $users;
        //return view('home');
    }
}

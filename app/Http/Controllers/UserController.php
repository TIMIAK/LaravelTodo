<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'name' => 'Debby',
        //     'email'=>'Debby@gmail.com',
        //     'password' => bcrypt('Derm'),
        // ];
        // //User::create($data);

        // $user = User::all();
        // return $user;
        // // Working with Eloquent

        // //Create
        // $user = new User();

        // $user->name = 'TimBaron';
        // $user->email = 'TimBaron@gmail.com';
        // $user->password = bcrypt('password');
        // $user->save();

        // //Read
        // $user = User::all();
        // return $user;

        // //Delete
        // User::where('id',2)->delete();

        // //Update
        // User::where('id',3)->update(['name' => 'Baron New Name']);
        // $user = User::all();
        // return $user;


        // // Working with Raw Data
        // //Create
        // DB::insert("insert into users(name,email,password) values(?,?,?)",[
        //     'Timothy','timothy@gmail.com','password'
        // ]);
        // //Read
        // $users = DB::select('select * from users');
        // return $users;

        // //Update
        // DB::update('update users set name = "Timbaron" where id=1');

        // //Delete
        // DB::delete('delete from users where id=1');


        return view('home');
    }
}

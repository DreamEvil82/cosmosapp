<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    function index(Request $req)
    {
        if(session()->has('Email')){
            return redirect('/check');
        }
        $user = UserModel::all()->where('Email', '=', $req['Email'])->where('Password', '=',$req['password']);
        if($user->count() == 1)
        {
            session()->put('Email',$req['Email']);
            return redirect('profile');
        }
        return view('/index');
    }

    function check(){
        if(session()->has('Email')){
           return redirect('/profile');
        }else{ return ("Error 404");}
    }



    function profile()

    {
        if(session()->has('Email'))
        {
            return view('profile');
        }
        return redirect('/');
    }

    function logout()
    
    {
        if(session()->has('Email'))
        {
            session()->pull('Email',null);
        }
        return redirect('/');
    }
}
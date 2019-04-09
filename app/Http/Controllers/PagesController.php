<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('validate.user.agent');
    }
    public function home(){
        return view('index');

    }
    public function profile(){
        return view('profile');

    }
    public function about(){
        return view('about');

    }
    public function login(){
        return view('login');

    }
    public function signup(){
        return view('auth.register');

    }
    public function tweets(){
        return view('tweets');
    }
    public function market(){
        return view('marketing');
    }
    public function showUser($id){
        $variableName = array('id'=>$id);
        return view('hello', $variableName );
    }
}

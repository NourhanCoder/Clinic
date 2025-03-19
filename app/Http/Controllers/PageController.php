<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function contactAction(Request $request){
        // dd($request->all());
        // return view('contact');
        return redirect()->route('contact_page')->with('success','Your message sent successfully');
    }

    public function history(){
        return view('history');
    }

    public function majors(){
        return view('majors');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       //dd(auth()->user()->hasRole('admin'));
        return view('home');
    }

    public function adminDemo()
    {
        return view('layouts.admin');
    }

    public function userDemo()
    {
        return view('layouts.user');
    }
    public function userAccess(){
        return view('layouts.noaccess');
    }
}





<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Food;
use \App\Category;
Use \App\User;
use \App\Order;
use Auth;
use Session;

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
        return view('catalog');
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);

        return view('/profile', compact('user'));
    }
    

}

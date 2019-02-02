<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::where('status', '0')->with('user')->paginate(10);


        return view('index',compact('comments'));
    }

    public function profile()
    {
        return view('profile');
    }
}

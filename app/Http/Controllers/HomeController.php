<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\User;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::where('status', '0')->with('user')->orderBy('created_at','desc')->paginate(10);

        return view('index', compact('comments'), ['title' => 'Главная']);
    }




}

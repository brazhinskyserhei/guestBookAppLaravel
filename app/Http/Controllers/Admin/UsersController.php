<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users', compact('users'), ['title' => 'Пользователи']);
    }

    public function changeStatus($id)
    {
        $user = User::find($id);
        $user->changeStatus();
        return redirect()->back();
    }
}

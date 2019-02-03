<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.comments', compact('comments'), ['title' => 'Комментарии']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required',
        ]);



        Comment::create(
            [
                'user_id' => Auth::user()->id,
                'email' => Auth::user()->email,
                'text' => $request->get('text')
            ]
        );

        return redirect()->back();
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        return redirect()->route('comments.index');
    }
}

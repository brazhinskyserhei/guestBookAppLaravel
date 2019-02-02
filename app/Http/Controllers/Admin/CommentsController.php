<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::with('user')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.comments', compact('comments'), ['title' => 'Комментарии']);
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        return redirect()->route('comments.index');
    }
}

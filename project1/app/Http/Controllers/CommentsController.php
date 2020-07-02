<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Auth;
use Validator;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($post_id)
    {
        $post = Post::where('id', $post_id)->firstOrFail();
        $comments = Comment::where('post_id', $post->id)->orderBy('created_at', 'desc')->get();

        return [
            'post' => $post,
            'comments' => $comments,
        ];
    }

    public function store(Request $request, Post $post)
    {
        return Comment::create([
            'content' => $request->text,
            'user_id' => auth()->id(),
            'post_id' => $post->id,
            'parent_id' => $request->parent_id ?? 0,
        ]);
    }

    public function destroy(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $comment->delete();

        return redirect()->route('post.detail', ['post_id' => $comment->post_id]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $thisComment = Comment::all();
        return view('posts.show',['comments'=>$thisComment]);
    }



    public function store(Request $request)
    {
        Comment::create([

            'content' => $request->input('content'),
            'post_id'=>$request->post_id,

        ]);
        return redirect()->route('posts.show',[$request->post_id, 'comments'=>Comment::all()]);
    }


    public function show($id)
    {

    }


    public function edit( Comment $comment)
    {
      return view('posts.editcomment', ['comment'=>$comment]);
    }


    public function update(Request $request, Comment $comment)
    {
        $comment->update([
            'content'=>$request->input('content'),
            'post_id'=> $request->post_id,

        ]);
        return redirect()->route('posts.show', [$comment->post_id]);

    }


    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('posts.show', [$comment->post_id]);
    }
}

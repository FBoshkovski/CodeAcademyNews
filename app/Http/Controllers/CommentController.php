<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class CommentController extends Controller
{

    public function createComment($id) {

        $post = Post::find($id);
        return view('addComment',['post' => $post]);

    }

    public function storeComment(Comment $comment,Request $request) {
        request()->validate(['body' => 'required']);

        $comment = new Comment;
        $comment->body = $request->body;
        $comment->post_id = $request->id;
        $comment->save();

        return back();

    }

    public function editComment($id) {

        $comment = Comment::find($id);

        return view('editComment',['comment' => $comment]);
    }

    public function updateComment(Comment $comment,$id) {

        request()->validate(['body' => 'required']);

        $comment = Comment::where('id',$id);

        $comment->update(['body' => request('body')]);

        return redirect('/posts');

    }

    public function deleteComment($comment) {

        Comment::destroy($comment);
        return back();
    }
}

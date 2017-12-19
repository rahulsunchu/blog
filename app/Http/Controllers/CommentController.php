<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\post;
use App\comment;

class CommentController extends Controller
{
    // public function create(post $postid)
    // {
    // 	return view('comments.create', compact('postid'));
    // }
    public function store(Request $request, $postid)
    {	
    	// dd($request->body);
    	$id = Auth::id();

    	// dd($user);
    	// return post('posts.store');
    	$comment = new comment;

    	$comment->user_id = $id;
    	$comment->post_id = $postid;
    	$comment->body = request('body');
    	// dd($comment);
    	$comment->save();
    	return back();
    }
    // public function store2(Request $request, $postid)
    // {   
    //     // dd($request->body);
    //     $id = Auth::id();

    //     // dd($user);
    //     // return post('posts.store');
    //     $comment = new comment;

    //     $comment->user_id = $id;
    //     $comment->post_id = $postid;
    //     $comment->body = request('body');
    //     // dd($comment);
    //     $comment->save();
    //     return back();
    // }
    public function delete($comment_id)
    {   
        $comment = Comment::find($comment_id);
        // dd($comment_id);
        $comment->delete();
        return back();
    }
    public function edit(Request $request, $comment_id)
    {   
        $comment = Comment::find($comment_id);
        // dd($request->body);
        $comment->where('id', $comment_id)->update(['body' => $request->body, 'edited' => 1]);
        return back();
    }
}

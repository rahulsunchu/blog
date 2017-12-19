<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\post;
use App\comment;

class PostController extends Controller
{
    public function post()
    {
    	return view('posts.create');
    }
    public function create()
    {
    	return redirect('index');
    }
    public function store()
    {	
    	$id = Auth::id();

    	// dd($user);
    	// return post('posts.store');
    	$post = new post;

    	$post->user_id = $id;
    	$post->title = request('title');
        // $post->subtitle = request('subtitle');
    	$post->body = request('body');
        $post->likes = 0;
    	$post->save();
    	return redirect('index');
    }
    public function edit(post $postid)
    {	
        $posts = $postid;

    	return view('/posts/edit', compact('posts'));
    }
    public function update(Request $request, $postid)
    {	
    	// dd($request->title);
    	$posts = post::find($postid);
    	// $posts->update();
    	// dd($posts);
    	$posts->where('id', $postid)->update(['title' => $request->title, 'body' => $request->body, 'edited_at' => now()]);
    	return redirect('/post/'.$postid);
        // return back();

    }
     public function delete($postid)
    {   
        $posts = post::find($postid);
        $posts->delete();
        return redirect('index');
    }
}
    
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\post;
use App\Like;

class LikeController extends Controller
{
    public function like(Request $request){
        $id = Auth::id();
    	$article = $request->all();
    	$post = post::find($request->postid);
    	$post->where('id', $request->postid)->increment('likes');
    	$post = post::find($request->postid);
        $response = array(
            'status' => 'success',
            'postid' => $request->postid,
            'userid' => $id,
            'likes' => $post->likes,
        );
        return \Response::json($response);
    }
    
    public function unlike(Request $request){
    	$post = post::find($request->postid);
    	$post->where('id', $request->postid)->decrement('likes');
    	$post = post::find($request->postid);
        $response = array(
            'status' => 'success',
            'postid' => $request->postid,
            'likes' => $post->likes,
        );
        return \Response::json($response);
    }
    
    public function likestore(Request $request){
        $id = Auth::id();
    	$like = new Like;
    	$like->user_id = $id;
    	$like->post_id = $request->postid;
    	$like->likestatus = 1;
    	$like->save();
        $response = array(
            'status' => 'success',
            'postid' => $request->postid,
            'userid' => $id,
            'likestatus' => $like->likestatus,

        );
        return \Response::json($response);
    }

    public function unlikestore(Request $request){
        $id = Auth::id();
        $likes = Like::where('user_id', '=', $id )
        				->where('post_id', '=', $request->postid)
        				->delete();
        $response = array(
            'status' => 'success',
            'postid' => $request->postid,
            'userid' => $id,

        );
        return \Response::json($response);
    }

}

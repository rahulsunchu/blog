<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\post;
use App\User;

use DB;


class UserController extends Controller
{
    public function profile(Request $request, $userid = 0){

        if($userid == 0){
    	$user = Auth::user();
        }
        else{
        $user = User::find($userid);
        }
		$url = Storage::url('public/avatars/'.$user->id.'.jpeg');
        $posts = post::selectRaw('count(user_id) as postsByUser')
                ->where('user_id', '=' ,Auth::id())
                ->get();
        $postsByUser = $posts[0]->postsByUser;
        // dd($postsByUser);

    	return view('users.user', compact('user', 'url', 'postsByUser'));
    }
    public function edit(Request $request){
        // dd($request);
    	$user = Auth::user();
		// $url = Storage::url('public/rahul.jpeg');
        $url = Storage::url('public/avatars/'.$user->id.'.jpeg');
        $posts = post::selectRaw('count(user_id) as postsByUser')
                ->where('user_id', '=' ,Auth::id())
                ->get();
        $postsByUser = $posts[0]->postsByUser;
    	return view('users.useredit', compact('user', 'url','postsByUser'));
    }
    public function update(Request $request){
        dd($request);
        $user = Auth::user();
        $url = Storage::url('public/avatars/'.$user->id.'.jpeg');


        // $url = Storage::url('public/rahul.jpeg');
        return view('users.useredit', compact('user', 'url'));
    }
    public function index($all = 0){

        if($month = request('month') and $year = request('year')){
            // dd('dd');
        $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->leftJoin('likes', 'posts.id', '=', 'likes.post_id', 'and', 'users.id', '=', 'likes.user')
            ->select('posts.*', 'users.name', 'users.email','users.designation','users.profilepic', 'likes.likestatus')
            ->whereRaw("monthname(posts.created_at) = '$month'")
            ->where('posts.user_id', '=', Auth::id())
            ->whereYear('posts.created_at', $year)
            ->orderByRaw('posts.created_at DESC')
            ->get();

        }
        else{

            $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->leftJoin('likes', 'posts.id', '=', 'likes.post_id', 'and', 'users.id', '=', 'likes.user')
            ->select('posts.*', 'users.name', 'users.email','users.designation','users.profilepic', 'likes.likestatus')
            ->where('posts.user_id', '=', Auth::id())
            ->orderByRaw('posts.created_at DESC')
            ->get();
            // dd($posts);
        }

            // $posts->whereMonth('created_at', 12);
        $comment_count = DB::table('posts')
            ->join('comments', 'posts.id', '=', 'comments.post_id')
            ->selectraw('posts.id, count(comments.id) as cid')
            ->groupBy('posts.id')
            ->get();
        $comments = DB::table('posts')
            ->join('comments', 'posts.id', '=', 'comments.post_id')
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->selectraw('posts.id, users.name, users.profilepic, comments.id as comment_id ,users.id as user_id, comments.body,comments.edited, comments.created_at')
            ->orderByRaw('comments.created_at DESC')
            ->get();
        return view('users.userposts', compact('posts', 'comment_count', 'all', 'comments'));
    }
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
	
  //   public function store(Request $request){

  //   	// dd($request->image->store('avatars'));
  //   	$id = Auth::id();
  //   	$path = Storage::putFileAs('avatars', $request->file('image'), $id.'.jpeg');
  //   	$user = User::find($id);
  //   	$user->where('id', $id)->update(['profilepic' => $path]);
		// $profilepic = Storage::put( $id, 'public');
		// dd($profilepic);
  //   	return view('users.user', compact('profilepic'));
  //   }

	public function store(Request $request)
	{
		$id = Auth::id();
		User::findOrFail($id);

		Storage::putFileAs('/public/avatars', $request->file('image'), $id.'.jpeg');
		return redirect('/user');
	}   
	public function imgstore(Request $request)
	{
		dd($request);
		$id = Auth::id();
		User::findOrFail($id);
		
		Storage::putFileAs('/public/imgtinymce/', $request->file('image'), $id.'.jpeg');
		return view('postAcceptor');
	}   

	public function update(Request $request)
	{     
		$user = Auth::user();
		$id = Auth::id();
		User::findOrFail($id);
		if(empty($request->file('image'))){

			$user->where('id', $id)->update(['name' => $request->name, 'lastname' => $request->lastname, 'dob' => $request->dob, 
				'designation' => $request->designation, 'edulevel' => $request->edulevel, 'college' => $request->college, 'bloodgroup' => $request->bloodgroup, 'phone' => $request->phone ]
			);
		}
		else{
			Storage::putFileAs('/public/avatars', $request->file('image'), $id.'.jpeg');

			$user->where('id', $id)->update(['name' => $request->name, 'lastname' => $request->lastname, 'dob' => $request->dob, 
				'designation' => $request->designation, 
				'profilepic' => "/storage/avatars/".$id.".jpeg", 'edulevel' => $request->edulevel, 'college' => $request->college, 'bloodgroup' => $request->bloodgroup, 'phone' => $request->phone ]
			);
		}


		return redirect('/user');
	}

}

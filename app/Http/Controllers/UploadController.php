<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UploadController extends Controller
{

	public function create(Request $request, $id)
	{

	  // get current time and append the upload file extension to it,
	  // then put that name to $photoName variable.
	  $photoName = $request->user_photo->getClientOriginalName();

	  /*
	  talk the select file and move it public directory and make avatars
	  folder if doesn't exsit then give it that unique name.
	  */
	  $request->user_photo->move(public_path('avatars'), $photoName);


		$user = User::find($id);

		$user->profile_photo = asset('avatars/'.$photoName);

		$user->save();

		return redirect()->route('profile');


	}
    
}

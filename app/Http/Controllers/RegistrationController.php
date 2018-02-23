<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller

{
    public function __construct()
	{

		$this->middleware('guest');
	}

	public function create()
	{
		return view('registration.create');

	}


	public function store()
	{
		 //validate form

		$this->validate(request(), [

			'name' => 'required',
			
			'email' => 'required|email',
			
			'password' => 'required|confirmed'
		]);

		//Create the user

		$user = User::create([ 

			'name' => request('name'),

			'email' => request('email'),
			
			'password' => bcrypt(request('password'))
		]);

		//Sign them in

		auth()->login($user); 

		//Send welcome email

		\Mail::to($user)->send(new Welcome($user));


		//Flash message

		session()->flash('message', 'Thanks for signing up!');

		//Redirect

		return redirect()->route('entries');


	}

}

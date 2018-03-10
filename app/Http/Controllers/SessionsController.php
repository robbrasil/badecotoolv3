<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

	public function __construct()
	{

		$this->middleware('guest', ['except' => ['destroy', 'profile']]);
	}

    public function create()
	{

		return view('sessions.create');

	}

	public function destroy()
	{

		auth()->logout();

		return redirect()->route('login');

	}

	public function store()
	{

		//Attempt to authenticate the user

		if (! auth()->attempt(request(['email', 'password'])) ){

			//If not, redirect back.
			return back()->withErrors([

				'message' => 'Please check your credentials and try again'

			]);
		}

		return redirect()->route('company_entries');

	}

	public function profile()
	{

		return view('profile');


	}
}

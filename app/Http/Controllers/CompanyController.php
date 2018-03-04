<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function company()
    {
      return view('company');
    }

    public function logoCreate(Request $request, $id)
  	{

  	  // get current time and append the upload file extension to it,
  	  // then put that name to $logoName variable.
  	  $logoName = $request->company_logo->getClientOriginalName();

  	  /*
  	  talk the select file and move it public directory and make avatars
  	  folder if doesn't exsit then give it that unique name.
  	  */
  	  $request->company_logo->move(public_path('logos'), $logoName);

  		$logo = Company::find($id);

  		$logo->logo = asset('logos/'.$logoName);

  		$logo->save();

  		return redirect()->route('company');


  	}
}

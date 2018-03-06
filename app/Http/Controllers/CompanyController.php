<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\User;
use App\Entry;

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

    public function company_entries()
    {
      $input = User::where('company_id', '=', auth()->user()->company_id())->latest()->get()->pluck('id')->toArray();
      $query = Entry::query();
      $i = 0;
      foreach ($input as $input) {
        if($i == 0)
        {
          $query->where('user_id', '=', $input);
        }else{
          $query->orWhere('user_id', $input);
        }
          $i++;
      }
      $entries = $query->get();
      return view('index', compact(['entries']));
    }

    public function company_archive()
    {
      $entries = Entry::where('user_id', '=', auth()->user()->id)->latest()->get();
  		$editors = Entry::whereNotNull('edit_id')->get();

  		return view('index', compact(['entries','editors']));
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\User;
use App\Entry;

class CompanyController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth')->except(['home']);
       $this->middleware('auth:web');
    }
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
      $entries = $query->latest()->take(50)->get();
      return view('index', compact(['entries']));
    }

    public function company_archive()
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
      $entries = $query->orderBy('id', 'desc')->get();
      return view('index', compact(['entries']));


      // $entries = Entry::where('user_id', '=', auth()->user()->id)->latest()->get();
  		// $editors = Entry::whereNotNull('edit_id')->get();
      //
  		// return view('index', compact(['entries','editors']));
    }

    public function company_register()
    {
      $companies = Company::orderBy('id')->get();;

      return view('forms.company_register', compact(['companies']));
    }

    public function company_create()
    {
      $this->validate(request(), [

        'name' => 'required',

      ]);

      // dd(auth()->id());

      // Refactoring
      Company::create([

        'name' => request('name'),


        // 'company_id' => auth()->user()->company_id,

        // needs this at model for each field >> protected $fillable = ['jobNumber', 'commnunity', 'lotNumber', 'jobSize', 'installer', 'date', 'notes', 'user_id'];

      ]);
      return redirect()->route('company_register');
    }

}

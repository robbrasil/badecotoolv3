<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Company;

class EntriesController extends Controller
{

	public function __construct()
	{

		 // $this->middleware('auth')->except(['home']);
		 $this->middleware('auth:web');
	}


	public function home()
	{
		return view('layout');
	}

	public function index()

	{
		// $entries = Entry::all();
		// $entries = Entry::latest()->get();
		$entries = Entry::where('user_id', '=', auth()->user()->id)->latest()->get();
		$editors = Entry::whereNotNull('edit_id')->get();
    $title = 'All Entries from' . auth()->user()->name;

		return view('index', compact(['entries','editors','title']));

	}

	public function create()
	{
		return view('forms.form');
	}

	public function store()
	{

		$this->validate(request(), [

			'jobNumber' => 'required',

			'community' => 'required',

			'lotNumber' => 'required',

			'jobSize' => 'required',

			'installer' => 'required',

			'date' => 'required'

		]);

		// dd(auth()->id());

		// Refactoring
		Entry::create([

			'jobNumber' => request('jobNumber'),

			'community' => request('community'),

			'lotNumber' => request('lotNumber'),

			'jobSize' => request('jobSize'),

			'installer' => request('installer'),

			'date' => request('date'),

			'notes' => request('notes'),

			'user_id' => auth()->user()->id

			// 'company_id' => auth()->user()->company_id,

			// needs this at model for each field >> protected $fillable = ['jobNumber', 'commnunity', 'lotNumber', 'jobSize', 'installer', 'date', 'notes', 'user_id'];

		]);


		// // Create a new entry using the request data

		// $entry = new Entry;

		// $entry -> jobNumber = request('jobNumber');

		// $entry -> community = request('community');

		// $entry -> lotNumber = request('lotNumber');

		// $entry -> jobSize = request('jobSize');

		// $entry -> installer = request('installer');

		// $entry -> date = request('date');

		// $entry -> notes = request('notes');

		// $entry -> user_id = auth()->id();

		// // dd($entry);

		// // Save it ot the database

		// $entry -> save();

		// And then redirect to index page

		session()->flash('message','New entry added!');

		return redirect()->route('entries.create');

	}

	function edit($id)
	{

		$entry =  Entry::find($id);

		// $entry->community = "Elevation";

		// $entry->save();



		return view('forms.formedit', compact('entry'));

	}

	function update(Request $request, $id)
	{

		$entry = Entry::find($id);

		$entry->edit_id = auth()->id();

		// $entry->editedby_by_user_type = auth()->user()->value('account_type');

		$entry->fill($request->input())->save();

		return redirect()->route('company_entries');

	}

	function destroy($id)
	{

		$entry = Entry::find($id)->delete();

		return back();

	}

	function notesEdit($id)
	{

		$entry =  Entry::find($id);

		// $entry = $entry->notes;

		return view('forms.editnote' , compact('entry'));

	}

	function notesUpdate(Request $request, $id)
	{

		$entry = Entry::find($id);

		$entry->notes = $request->notes;

		$entry->save();

		return redirect()->route('company_entries');
	}

}

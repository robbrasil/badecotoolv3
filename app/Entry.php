<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
  protected $appends = ['user'];
	// Every column from database table needs to be here
    protected $fillable = ['jobNumber', 'community', 'lotNumber', 'jobSize', 'installer', 'date', 'notes', 'user_id', 'company_id'];

    // // This is the opposite of $fillable
    // protected $guarded = ['field', 'to', 'not', 'take'];

    // You can also create a parent class and extend it so you don't have to do this for every form

    public function user()  // $entry->user->name
    {
    	// return $this->belongsTo(User::class, 'user_id');
      return $this->belongsTo('App\User');
    }

    public function editor()
    {
    	return $this->belongsTo(Company::class);
    }

}

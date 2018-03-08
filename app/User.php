<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Company;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'company_id', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function entries()
    {
        return $this->hasMany('App\Entry');
    }
    public function company_name()
    {
        return Company::where('id', '=', auth()->user()->company_id)->value('name');
    }
    public function company_id()
    {
        return Company::where('id', '=', auth()->user()->company_id)->value('id');
    }
    public function company_logo()
    {
        return Company::where('id', '=', auth()->user()->company_id)->value('logo');
    }



}

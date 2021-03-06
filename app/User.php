<?php

namespace mifftah;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
	use Notifiable;
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'lname',
		'img',
		'type',
		'email',
		'password',
	];
	
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];
	
	public function userdatainfo() {
		return $this->belongsTo('App\Userinfo');
	}
	public function bookingdata(){
		return  $this->hasMany('App\booking');
	}
	
}

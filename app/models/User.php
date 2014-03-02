<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

 class User extends Eloquent implements UserInterface, RemindableInterface {
// class User extends Magniloquent implements UserInterface, RemindableInterface {

	 protected $fillable=array('fname','lname','mname','address','Email','username','password');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function role()
	{
		return $this->belongsTo('Role');
	}

	public function personalinfo()
	{	
		return $this->hasOne('PersonalInformation');
	}
	public function statusLoan(){
		return $this->belongsto('Status');
	}
	
	

}
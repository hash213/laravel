<?php

class Status extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function personalinfo(){
		return $this->hasMany('PersonalInformation');
	}
	public function user(){
		return $this->hasMany('User');
	}

}

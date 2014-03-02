<?php

class Balance extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function personalinfo(){
		return $this->belongsTo('PersonalInformation');
	}
}

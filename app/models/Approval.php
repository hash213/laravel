<?php

class Approval extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function personalinformation(){
		return $this->belongsTo('PersonalInformation');
	}
}

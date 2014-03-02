<?php

class Release extends Eloquent {
	protected $guarded = array();

	protected $table='loan_releases';

	public static $rules = array();

	public function personalinfo(){
		return $this->belongsTo('PersonalInformation');
	}
}

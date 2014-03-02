<?php

class CoMaker extends Eloquent {
	protected $guarded = array();

	protected $table ='comakers';

	public static $rules = array();

	public function user(){
	 return	$this->belongsTo('User');
	}


}


<?php

class Collateral extends Eloquent {
	protected $guarded = array();

	protected $table = 'collaterals';

	public static $rules = array();

	public function user(){
	
		return $this->belongsTo('User');

	}
	
}

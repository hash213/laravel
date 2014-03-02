<?php

class DependentEntity extends Eloquent {
	protected $guarded = array();

	protected $table = 'dependents_entities';

	public static $rules = array();

	//relationship
	public function user(){
	 return	$this->belongsTo('User');
	}

	public function personalinfo(){
	 return	$this->belongsTo('PersonalInformation');
	}

	
	


	
}

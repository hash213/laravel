<?php

class Application extends Eloquent {
	
	protected $guarded = array();

	protected $table = 'applications';
	public static $rules = array();
	
	public function user(){
		return $this->hasOne('User');
	}

	public function collateral(){
		return $this->hasOne('Collateral');
	}
	public function comaker(){
		return $this->hasOne('CoMaker');
	}
	public function dependents(){
		return $this->hasOne('DependentEntity');
	}
	public function personalinfo(){
		return $this->hasOne('PersonalInformation');
	}
	
}

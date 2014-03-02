<?php

class PersonalInformation extends Eloquent {
	protected $guarded = array();

	protected $table= 'personal_informations';

	public static $rules = array();

	public function user(){
	 return	$this->belongsTo('User');
	}
	public function statusLoan(){
	 return	$this->belongsToMany('Status');
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
	public function requirement(){
		return $this->hasOne('Requirement');
	}
	public function approval(){
		return $this->hasOne('Approval');
	}
	public function release(){
		return $this->hasOne('Release');
	}
	public function status(){
		return $this->belongsTo('Status');
	}
	public function payment(){
		return $this->hasMany('Payment');
	}
	public function balance(){
		return $this->hasOne('Balance');
	}

}

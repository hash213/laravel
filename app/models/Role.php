<?php

class Role extends Eloquent {
	protected $guarded = array();

	protected $table='roles';

	public static $rules = array();

	public function users()
	{
		return $this->hasMany('User');
	}
}

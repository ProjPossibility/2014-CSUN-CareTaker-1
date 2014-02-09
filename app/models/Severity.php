<?php

class Severity extends Eloquent {

	protected $fillable = array();

	public function notifications()
	{
		return $this->hasMany('Notification');
	}

}
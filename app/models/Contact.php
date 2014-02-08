<?php

class Contact extends Eloquent {

	protected $fillable = array();

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function contactfor()
	{
		return $this->belongsTo('User', 'contact_for_user_id');
	}
	
}
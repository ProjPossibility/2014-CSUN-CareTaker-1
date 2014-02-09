<?php

class Contact extends Eloquent {

	protected $fillable = array('user_id', 'type_id','order_id');

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function contactfor()
	{
		return $this->belongsTo('User', 'contact_for_user_id');
	}

}
<?php

class Notificationtype extends Eloquent {

	protected $fillable = array();

	public function notifications()
	{
		return $this->hasMany('Notification','resources_type_id');
	}

}